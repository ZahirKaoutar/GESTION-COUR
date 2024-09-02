<?php

//
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cours;
use App\Models\Filiere;
use App\Models\Module;
use App\Models\Semestre;
use App\Models\TP;
use App\Models\TD;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public  function  index(){
        $filieres = Filiere::all();
        $semestres = Semestre::all();
        $modules = Module::all();
$cours=Cours::all();
$tp=TP::all();
$td=TD::all();


   return view('Admin.home',compact('filieres', 'semestres', 'modules','cours','tp','td'));
     }
    public function showUploadForm()
    {
        $filieres = Filiere::all();
        $semestres = Semestre::all();
        $modules = Module::all();
        $cours=Cours::all();

        return view('Admin.UploadCour', compact('filieres', 'semestres', 'modules','cours'));
    }

    public function showUploadTDForm()
{
    $filieres = Filiere::all();
    $semestres = Semestre::all();
    $modules = Module::all();


    // Retourner la vue pour l'upload des TD
    return view('Admin.UploadTD', compact('filieres', 'semestres', 'modules'));
}
public function showUploadTPForm()
{
    $filieres = Filiere::all();
    $semestres = Semestre::all();
    $modules = Module::all();

    // Retourner la vue pour l'upload des TD
    return view('Admin.UploadTP', compact('filieres', 'semestres', 'modules'));
}
    // Gérer les téléchargements de cours
    public function uploadCours(Request $request)
    {

        $request->validate([

            'module_id' => 'required|string|max:255',
           'titre' => 'required|string|max:255',

            'pdf' => 'required|file|mimes:pdf'
        ]);


        $path = $request->file('pdf')->store('pdfs', 'public');

        $cours = new Cours();
        $cours->module_id= $request->module_id;
        $cours->titre= $request->titre;

        $cours->pdf_path = $path;
        $cours->save();

        return redirect()->route('show')->with('success', 'Votre fichier a été téléchargé avec succès.');
    }

    // Gérer les téléchargements de TP
    public function uploadTP(Request $request)
    {


            $request->validate([

                'module_id' => 'required|string|max:255',
               'titre' => 'required|string|max:255',

                'pdf' => 'required|file|mimes:pdf'
            ]);



        $path = $request->file('pdf')->store('pdfs', 'public');

        $tp = new TP();
        $tp->module_id= $request->module_id;
        $tp->titre= $request->titre;

        $tp->pdf_path = $path;

        $tp->save();


        return redirect()->route('show')->with('success', 'Votre fichier a été téléchargé avec succès.');
    }

    // Gérer les téléchargements de TD
    public function uploadTD(Request $request)
    {
        $request->validate([

            'module_id' => 'required|string|max:255',
           'titre' => 'required|string|max:255',

            'pdf' => 'required|file|mimes:pdf'
        ]);

        $path = $request->file('pdf')->store('pdfs', 'public');

        $td = new TD();

        $td->module_id= $request->module_id;
        $td->titre= $request->titre;

        $td->pdf_path = $path;

        $td->save();
        return redirect()->route('show')->with('success', 'Votre fichier a été téléchargé avec succès.');
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


}

