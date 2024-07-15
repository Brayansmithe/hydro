<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>
<body class="@yield('body')">

<div class="relative">
    <div class="fixed h-screen w-screen bg-overlay -z-10"></div>
</div>
    
    <section class="relative">
        <div class="grid grid-cols-5 w-screen bg-white pt-2 pb-2  fixed bottom-0 left-0 pl-1 z-10">
            <a href="acceuil">
                <div class="text-center ml-4 mr-5 ">
                    <i class="bi bi-house-door font-bold text-lg"></i>
                    <p class="text-xs">Accueil</p>
                </div>
            </a>

            <a href="MesBarrages">
                <div class="text-center ml-4 mr-5 ">
                    <i class="fa-solid fa-list font-bold text-lg"></i>
                    <p class="text-xs">Entreprise</p>
                </div>
            </a>

            <a href="video">
                <div class="text-center ml-4 mr-5 ">
                    <i class="fa-regular fa-circle-play font-bold text-lg"></i>
                    <p class="text-xs">Vidéos</p>
                </div>
            </a>

            <a href="barrage">
                <div class="text-center ml-4 mr-5 ">
                    <i class="fa-solid fa-chart-line font-bold text-lg"></i>
                    <p class="text-xs">Actif</p>
                </div>
            </a>

            <a href="compte">
                <div class="text-center ml-4 mr-5 ">
                    <i class="fa-regular fa-user font-bold text-lg"></i>
                    <p class="text-xs">Mon</p>
                </div>
            </a>

        </div>

    </section>

    <section class="mb-16 ">
        @yield('content')
    </section>

    <script src="https://kit.fontawesome.com/ca056c53d6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>
