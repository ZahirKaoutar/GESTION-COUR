<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use App\Models\Filiere;
use App\Models\Module;
use App\Models\Semestre;
use App\Models\TP;
use App\Models\TD;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    // Télécharger un cours
    public function downloadCours($id)
    {
        $cours = Cours::findOrFail($id);
        return response()->download($cours->pdf_path);
    }

    // Télécharger un TP
    public function downloadTP($id)
    {
        $tp = TP::findOrFail($id);
        return response()->download($tp->pdf_path);
    }

    // Télécharger un TD
    public function downloadTD($id)
    {
        $td = TD::findOrFail($id);
        return response()->download($td->pdf_path);
    }





    public function index()
    {

        $modules = Module::all();
        $filieres=Filiere::all();


        // Retourner la vue pour l'upload des TD
        return view('CHIMIE.modulesemestre.modulesemestre1', compact('modules','filieres'));
    }
    public function indexSem($id) {


        $Filiere=Filiere::find($id);


        // Retourner la vue pour l'upload des TD
        return view('CHIMIE.Semestre', compact('Filiere'));
    }

public function PDC($id){
    $module=Module::find($id);
    return view('CHIMIE.3PDC', compact('module'));
}
public function SerchSemmodule($id){
    $sem=Semestre::find($id);
    return view('CHIMIE.modulesemestre.modulesemestre1', compact('sem'));
}

public function showPdf($id)
{
    // Rechercher un PDF dans les cours
    $cours = Cours::find($id);
    if ($cours) {
        $pathToFile = storage_path('app/public/' . $cours->pdf_path);
    } else {
        // Rechercher un PDF dans les TP
        $tp = TP::find($id);
        if ($tp) {
            $pathToFile = storage_path('app/public/' . $tp->pdf_path);
        } else {
            // Rechercher un PDF dans les TD
            $td = TD::find($id);
            if ($td) {
                $pathToFile = storage_path('app/public/' . $td->pdf_path);
            } else {
                // Si aucun PDF trouvé, renvoyer une erreur 404
                abort(404, 'File not found');
            }
        }
    }

    // Vérifier si le fichier existe et le retourner
    if (file_exists($pathToFile)) {
        return response()->file($pathToFile);
    } else {
        abort(404, 'File not found');
    }
}
    public function filiere (){
        $filieres=Filiere::all();
        return view('Index',compact('filieres'));
    }



}

