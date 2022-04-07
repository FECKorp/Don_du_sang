<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;
use App\Models\Import_User_File;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use PHPUnit\Exception;
use Storage;

class ImportUserController extends Controller
{
    public function __construct() {
        $this->middleware('isAdmin');
    }

    /*
     * Format CSV :
     * NOM;Prenom;identifiant;password;TypeUser;Classe;email
     * Types Users = ELEVES si pas ELEVES mettre n'importe quoi
     */

    public function import_file(Request $request) {
        $validator = Validator::make($request->all(), [
            'import-file-user' => 'bail|required|file'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else {
            try {
                $path = Storage::putFile('users_csv_import/', $request->file('import-file-user')); //Importe fichier dans Storage
            }
            catch (Exception $e) {
                \Session::flash("error", "Une erreur a eu lieu, le fichier csv n'a pas été importé !");
                return redirect()->back();
            }
            $import = new Import_User_File();
            $import->path = $path;
            $import->created_at = Carbon::now();
            try {
                $import->save();
            }
            catch (Exception $e) {
                dd($e);
                \Session::flash("error", "Une erreur a eu lieu, les utilisateurs n'ont pas été ajouter en base !");
                return redirect()->back();
            }
            $this->createAllUsers($import->id);
        }
        return redirect()->back();
    }

    public function createAllUsers ($id)
    {
        $pathFile = Import_User_File::find($id);

        try {
            $users = [];

            if (($open = fopen(Storage::path($pathFile->path), "r+")) !== FALSE) {
                while (($data = fgetcsv($open, 1000, ";")) !== FALSE) {
                    $users[] = $data;
                }
                fclose($open);
            }

            for ($i = 0; $i < sizeof($users); $i++) {
                if (User::where("email", "=", $users[$i][2])->count() == 0) {
                    $user = new User();
                    $user->nom = $users[$i][0];
                    $user->prenom = $users[$i][1];
                    $user->password = \Hash::make($users[$i][3]);
                    $user->email = $users[$i][6];
                    if ($users[$i][4] == "ELEVES") {
                        $classbool = false;
                        $allClasses = Classe::all();
                        foreach ($allClasses as $classe) {
                            if ($users[$i][5] == strtoupper($classe->nom)) {
                                $user->classe_id = $classe->id;
                                $classbool = true;
                            }
                        }
                        if ($classbool == false) {
                            $newClasse = new Classe();
                            $newClasse->nom = strtoupper($users[$i][5]);
                            try {
                                $newClasse->save();
                                $user->classe_id = $newClasse->id;
                            }
                            catch (\Exception $exception) {
                                \Session::flash("error", "La classe de l'élève " . $user->nom . " " . $user->prenom . " n'a pas pu être créee !");
                            }
                        }
                    }
                    try {
                        $user->save();
                    }
                    catch (\Exception $e) {
                        \Session::flash("error", "Une erreur a eu lieu, l'utilisateur " . $users[$i][0] . " " . $users[$i][1] . " n'a pas pu être ajouté et à bloquer l'inscription des autres utilisateurs !");
                        return redirect()->back();
                    }
                }
            }
            \Session::flash("success", "Tous les utilisateurs ont été ajoutés avec succès !");
        }
        catch (\Exception $e) {
            \Session::flash("error", "Une erreur a eu lieu, tous les utilisateurs n'ont pas pu être ajoutés, veuillez vérifier que le fichier csv est encoder en UTF-8 !");
            return redirect()->back();
        }
        return redirect()->back();
    }
}
