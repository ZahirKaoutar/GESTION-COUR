<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Background Rotation</title>
    <style>
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            position: relative;
            z-index: 2; /* Assurez-vous que le formulaire est au-dessus des images */
        }
        .form-title {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            font-weight: bold;
        }
        .form-group select,
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .form-group input[type="file"] {
            padding: 3px;
        }
        .btn-submit {
            width: 100%;
            padding: 10px;
            background-color: #ff0000;
            border: none;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-submit:hover {
            background-color: #0056b3;
        }
        :root {
            --direction: -45deg;
        }

        body {
            margin: 0;
            padding: 0;
        }

        main {
            position: relative;
            width: 100vw;
            height: 100vh;
            overflow: hidden;
        }

        .background, .foreground {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .background {
            background-image: url('/assets/img/slide/M.jpg');
        }

        .foreground {
            background-image: url('/assets/img/slide/CDI.png');
            mask-image: linear-gradient(var(--direction), rgba(0,0,0,1) 40%, rgba(0,0,0,0) 60%);
            mask-position: 50% 50%;
            z-index: 1; /* Assurez-vous que cette image est sous le formulaire */
        }

    </style>
</head>
<body>
    <main>
        <div class="background"></div>
        <div class="foreground"></div>
        <div class="form-container">
            <h2 class="form-title">Upload Cours</h2>

            <!-- Afficher les messages de succès -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Afficher les erreurs de validation -->
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method='POST' action='{{ route('admin.upload.cours') }}' enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="pd">Choisir un fichier PDF</label>
                    <input type='file' name='pdf' id="pd">
                </div>
                <div class="form-group">
                    <label for="pdf">Titre</label>
                    <input type='text' name='titre' id="pdf">
                </div>

                <div class="form-group">
                    <select name='module_id' id="titreMod">
                                @foreach($filieres as $filiere)
                                        <optgroup label="{{ $filiere->nom }}">
                                            @foreach($filiere->semestres as $semestre)
                                                @foreach($semestre->modules as $module)
                                                    <option value='{{ $module->id }}'>{{ $module->nom }}</option>
                                                @endforeach
                                            @endforeach
                                @endforeach
                    </select>

                </div>
                <button type="submit" class="btn-submit">Envoyer</button>
            </form>
        </div>
    </main>
    <script>
        let c = 45;

        function draw() {
            document.documentElement.style.setProperty('--direction', c++ + 'deg');
            requestAnimationFrame(draw);
        }

        requestAnimationFrame(draw);
    </script>
</body>
</html>
