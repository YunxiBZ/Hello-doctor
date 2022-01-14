<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body class="d-flex flex-column h-100">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                @auth
                <a class="navbar-brand" href="/"> AllO'Doc</a>
                @endauth
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Accueil</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        @guest
                        <a class="btn btn-outline-light " href={{route('auth.login')}}>Connexion</a>
                        <a class="btn btn-info" href={{route('auth.signup')}}>Inscription</a>
                        @endguest
                        @auth
                        <a class="navbar-brand" href="/">Bonjour {{Auth::user()->practitioner->firstname ?? Auth::user()->patient->firstname ?? 'admin'}}</a>
                        <a class="btn btn-info me-1" href={{route('appointments.index')}}>Mes rendez-vous</a>
                        <a class="btn btn-outline-light me-1" href={{route('auth.logout')}}>Se déconnecter</a>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>
    </header>
    @yield('content')
    <footer>
        <div class="text-center p-4 bg-primary text-light">
            &copy; 2022 Copyright AllO'Doc
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>