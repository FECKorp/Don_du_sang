<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClassesController extends Controller
{
    public function __construct() {
        $this->middleware('isAdmin');
    }

    public function delete($id) {
        $classe = Classe::find($id);
        try {
            $classe->delete();
            \Session::flash("success", "La classe a été supprimé avec succès !");
        }
        catch (\Exception $e) {
            if ($e->getCode() == 23000) {
                \Session::flash("error", "Des élèves appartiennent à cette classe, elle ne peut donc pas être supprimée. !");
            }
            else {
                \Session::flash("error", "Une erreur a eu lieu, la classe n'a pas été supprimé !");
            }
        }
        return redirect()->back();
    }

    public function update(Request $request) {
        $validator = Validator::make($request->all(), [
            'id' => 'bail|int|required',
            'nom' => 'bail|string|required|max:255',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        else {
            $classe = Classe::find($request->input("id"));
            $classe->nom = $request->input("nom");
            try {
                $classe->save();
                \Session::flash("success", "La classe a bien été modifiée.");
            }
            catch (\Exception $e) {
                \Session::flash("error", "Une erreur a eu lieu, la classe n'a pas été modifiée.");
            }
            return redirect()->back();
        }
    }

    public function create(Request $request) {
        $validator = Validator::make($request->all(), [
            'nom' => 'bail|string|required|max:255',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        else {
            $classe = new Classe();
            $classe->nom = $request->input("nom");
            try {
                $classe->save();
                \Session::flash("success", "La classe a bien été modifiée.");
            }
            catch (\Exception $e) {
                \Session::flash("error", "Une erreur a eu lieu, la classe n'a pas été modifiée.");
            }
            return redirect()->back();
        }
    }
}
