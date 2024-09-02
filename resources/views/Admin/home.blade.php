{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">

                                <div class="card-body">
                                    <h5 class="card-title">Card Title 1</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">

                                <div class="card-body">
                                    <h5 class="card-title">Card Title 2</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">

                                <div class="card-body">
                                    <h5 class="card-title">Card Title 3</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button>v</button>
    <table>
        <tr>
            <th>cours</th>
            <th>TitreCoure</th>
            {{-- <th>filiere</th>
            <th>semestre</th>
           <th>Module</th> --}}
        {{-- </tr>
        @foreach ($cours as $c)
        <tr>
            <td>{{$c->titre}}</td>
            <td>{{$c->pdf_path}}</td>
        </tr>

        @endforeach
    </table>
</x-app-layout> --}} --}}


    {{-- <h1>Liste des Cours</h1>

    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Filière</th>
                <th>Semestre</th>
                <th>PDF</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cours as $cours)
                <tr>
                    <td>{{ $cours->titre }}</td>
                    <td>{{ $cours->module->nom }}</td>
                    <td>{{ $cours->module->semestre->nom }}</td>
                    <td>{{ $cours->semestre }}</td>
                    <td>
                        <!-- Afficher le PDF --><div class="pdf-container">
                            <a href="{{ route('cours.showPdf', ['id' => $cours->id]) }}" target="_blank">pppp</a>
        </div>
                        <!-- Lien pour télécharger le PDF -->

                    </td>
                </tr>
            @endforeach
        </tbody>
        <button>
            <a href="{{ route('dashboard') }}">Ajouter un cours</a>
        </button>
    </table>
 --}}


 {{-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Cours</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 20px;
        }
        .pdf-icon {
            width: 24px;
            height: 24px;
            vertical-align: middle;
        }
        .pdf-container {
            text-align: center;
        }
        .pdf-link {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            color: #007bff;
            text-decoration: none;
        }
        .pdf-link:hover {
            text-decoration: underline;
        }
        .btn-add {
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mb-4">Liste des Cours</h1>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Filière</th>
                    <th>Semestre</th>
                    <th>PDF</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cours as $cours)
                    <tr>
                        <td>{{ $cours->titre }}</td>
                        <td>{{ $cours->module->nom }}</td>
                        <td>{{ $cours->module->semestre->nom }}</td>
                        <td>
                            <div class="pdf-container">
                                <a href="{{ route('cours.showPdf', ['id' => $cours->id]) }}" target="_blank" class="pdf-link">
                                    <img src="https://img.icons8.com/material-outlined/24/000000/pdf.png" alt="PDF Icon" class="pdf-icon">
                                    <span>Voir PDF</span>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>




        <div class="btn-add">
            <a href="{{ route('dashboard') }}" class="btn btn-">retour</a>
            <a href="{{ route('admin.upload.cours') }}" class="btn btn-primary">Ajouter un cours</a>
        </div>






    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html> --}}







<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Cours, TP et TD</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            background: linear-gradient(270deg, #ff031c, #013368);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }

        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #dc3545; /* Red */
        }
        .table th {
            background-color: #007bff; /* Blue */
            color: white;
        }
        .pdf-icon {
            width: 24px;
            height: 24px;
        }
        .pdf-container {
            text-align: center;
        }
        .pdf-link {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            color: #007bff;
            text-decoration: none;
        }
        .pdf-link:hover {
            text-decoration: underline;
        }
        .btn-add .btn-secondary {
            background-color: #dc3545; /* Red */
            border-color: #dc3545;
        }
        .btn-add .btn-secondary:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
        .btn-add .btn-primary {
            background-color: #007bff; /* Blue */
            border-color: #007bff;
        }
        .btn-add .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1>Liste des Cours</h1>
        <table class="table table-striped table-bordered mb-4">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Filière</th>
                    <th>Semestre</th>
                    <th>PDF</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cours as $cour)
                    <tr>
                        <td>{{ $cour->titre }}</td>
                        <td>{{ $cour->module->semestre->filiere->nom }}</td>
                        <td>{{ $cour->module->semestre->nom }}</td>
                        <td>
                            <div class="pdf-container">
                                <a href="{{ route('cours.showPdf', ['id' => $cour->id]) }}" target="_blank" class="pdf-link">
                                    <img src="https://img.icons8.com/material-outlined/24/000000/pdf.png" alt="PDF Icon" class="pdf-icon">
                                    <span>Voir PDF</span>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="btn-add mt-4">
            <a href="{{ route('dashboard') }}" class="btn btn-secondary">Retour</a>
            <a href="{{ route('admin.upload.c') }}" class="btn btn-primary">Ajouter un cours</a>
        </div>

        <h1>Liste des TP</h1>
        <table class="table table-striped table-bordered mb-4">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Filière</th>
                    <th>Semestre</th>
                    <th>PDF</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tp as $tps)
                    <tr>
                        <td>{{ $tps->titre }}</td>
                        <td>{{ $tps->module->semestre->filiere->nom }}</td>
                        <td>{{ $tps->module->semestre->nom }}</td>
                        <td>
                            <div class="pdf-container">
                                <a href="{{ route('tp.showPdf', ['id' => $tps->id]) }}" target="_blank" class="pdf-link">
                                    <img src="https://img.icons8.com/material-outlined/24/000000/pdf.png" alt="PDF Icon" class="pdf-icon">
                                    <span>Voir PDF</span>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="btn-add mt-4">
            <a href="{{ route('dashboard') }}" class="btn btn-secondary">Retour</a>
            <a href="{{ route('admin.upload.P') }}" class="btn btn-primary">Ajouter un TP</a>
        </div>

        <h1>Liste des TD</h1>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Filière</th>
                    <th>Semestre</th>
                    <th>PDF</th>
                </tr>
            </thead>
            <tbody>
                @foreach($td as $tds)
                    <tr>
                        <td>{{ $tds->titre }}</td>
                        <td>{{ $tds->module->semestre->filiere->nom }}</td>
                        <td>{{ $tds->module->semestre->nom }}</td>
                        <td>
                            <div class="pdf-container">
                                <a href="{{ route('td.showPdf', ['id' => $tds->id]) }}" target="_blank" class="pdf-link">
                                    <img src="https://img.icons8.com/material-outlined/24/000000/pdf.png" alt="PDF Icon" class="pdf-icon">
                                    <span>Voir PDF</span>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="btn-add mt-4">
            <a href="{{ route('dashboard') }}" class="btn btn-secondary">Retour</a>
            <a href="{{ route('admin.upload.D') }}" class="btn btn-primary">Ajouter un TD</a>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
