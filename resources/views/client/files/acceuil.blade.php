@extends('client.master')

@section('title')
    Acceuil
@endsection

@section('content')

    <style>
        body{
            background-image: url('images/logo5.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
            width: 100%;
            /* display: flex;
            justify-content: center;
            align-items: center; */
            color: white; /* Couleur du texte en blanc pour contraster avec l'image */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
    </style>

    <div class="container">

        <div class="container mt-4 row mb-4 d-flex justify-content-between align-items-center">
            <div class="col text-start">
                {{-- <img src="images/logo.jpeg" class="" alt="###"> --}}
            </div>
            <div class="col text-center">
                <h6 class="fw-bold">SPE ENERGY</h6>
            </div>
            <div class="col text-end">
                <i class="bi bi-person-circle text-dark"></i>
            </div>
        </div>

        <div class="text-center">
            <h1>Bienvenu</h1>
        </div>
        <hr class="text-dark">
        <div class="container row mt-4 mb-4">
            <div class="col text-start">
                <span class="custom p-3">
                    Inviter
                </span>
            </div>
            <div class="col text-center">
                <span class="custom p-3">
                    Recharger
                </span>
            </div>
            <div class="col text-end">
                <span class="custom p-3">
                    Retirer
                </span>
            </div>
        </div>

        <hr class="text-dark">

        <h2 class="text-center"><u>Partenaires</u></h2>

        <div class="container row mt-5">
            <div class="col text-start">
                <img src="images/logo1.jpg" class="" alt="###">
            </div>
            <div class="col text-center">
                <img src="images/logo2.jpg" class="" alt="###">
            </div>
            <div class="col text-end">
                <img src="images/logo3.jpg" class="" alt="###">
            </div>
        </div>
    </div>  

@endsection