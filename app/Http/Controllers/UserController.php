<?php

namespace App\Http\Controllers;

use App\Mail\sendPasswordGenerate;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Str;

class UserController extends Controller
{
    public function delete(int $id) {
        $user = User::find($id);
        try {
            $user->delete();
            \Session::flash("success", "L'utilisateur a été supprimé avec succès !");
        }
        catch (\Exception $e) {
            \Session::flash("error", "Une erreur a eu lieu, l'utilisateur n'a pas été supprimé !");
        }
        return redirect()->back();
    }

    public function updateAdmin(Request $request) {
        $validator = Validator::make($request->all(), [
            'admin' => 'bail|int|required',
            'nom' => 'bail|string|required|max:255',
            'prenom' => 'bail|string|required',
            'email' => 'bail|email|required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        else {
            $admin = User::find($request->input("admin"));
            $admin->nom = $request->input("nom");
            $admin->prenom = $request->input("prenom");
            $admin->email = $request->input("email");
            try {
                $admin->save();
                \Session::flash("success", "L'administrateur a été modifié avec succès !");
            }
            catch (\Exception $e) {
                \Session::flash("error", "Une erreur a eu lieu, l'administrateur n'a pas été modifié !");
                return redirect()->back();
            }
            return redirect()->route("dash-user");
        }
    }

    public function updateEleve(Request $request) {
        $validator = Validator::make($request->all(), [
            'eleve' => 'bail|int|required',
            'nom' => 'bail|string|required|max:255',
            'prenom' => 'bail|string|required',
            'email' => 'bail|email|required',
            'classe' => 'bail|int|required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        else {
            $eleve = User::find($request->input("eleve"));
            $eleve->nom = $request->input("nom");
            $eleve->prenom = $request->input("prenom");
            $eleve->email = $request->input("email");
            $eleve->classe_id = $request->input("classe");
            try {
                $eleve->save();
                \Session::flash("success", "L'élève a été modifié avec succès !");
            }
            catch (\Exception $e) {
                \Session::flash("error", "Une erreur a eu lieu, l'élève n'a pas été modifié !");
                return redirect()->back();
            }
            return redirect()->route("dash-user");
        }
    }

    public function sendPasswordMail(User $user, $password) {
        $content = [
            'nom' => $user->nom,
            'prenom' => $user->prenom,
            'password' => $password,
        ];
        \Mail::to($user->email)->send(new sendPasswordGenerate($content));
    }

    public function createUser(Request $request) {
        $validator = Validator::make($request->all(), [
            'type' => 'bail|int|required',
            'nom' => 'bail|string|required|max:255',
            'prenom' => 'bail|string|required',
            'email' => 'bail|email|required',
            'classe' => 'bail|int',
            'generatePasswordBool' => 'bail|int|required',
            'password_confirm' => 'bail|same:password_one'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        else {
            $user = new User();
            $user->nom = $request->input("nom");
            $user->prenom = $request->input("prenom");
            $user->email = $request->input("email");

            if ($request->input("type") == 1) {
                $user->is_admin = 1;
            }
            else if ($request->input("type") == 2) {
                $user->classe_id = $request->input("classe");
            }

            if ($request->input("generatePasswordBool") == 0) {
                $user->password = \Hash::make($request->input("password_one"));
            }
            else {
                $clearPassword = Str::random(12);
                $user->password = \Hash::make($clearPassword);
                //Envoi de mail avec mot de passe
                app(UserController::class)->sendPasswordMail($user, $clearPassword);
            }

            try {
                $user->save();
                \Session::flash("success", "L'utilisateur a été crée avec succès !");
            }
            catch (\Exception $e) {
                \Session::flash("error", "Une erreur a eu lieu, l'utilisateur n'a pas été crée !");
                return redirect()->back();
            }
            return redirect()->route("dash-user");
        }
    }
}
