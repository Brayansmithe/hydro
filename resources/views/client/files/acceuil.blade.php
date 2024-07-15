@extends('client.master')

@section('title')
    Acceuil
@endsection

@section('body')
    bg-cover bg-no-repeat bg-center min-h-screen text-shadow
@endsection

@section('content')

    <style>
        body{
            background-image: url('images/logo5.jpg');
        }
    </style>

    <div class="container text-white text-shadow">

        
        <div class="container mt-10 row mb-10 d-flex justify-content-between align-items-center">
            <div class="col text-start">
                <a href="@yield('menulink')">
                    <i class="fa-solid fa-arrow-left text-white border-white border-2 rounded-full p-1"></i>
                </a>
            </div>
            <div class="col text-center">
                <h6 class=" text-3xl font-bold text-stroke ">SPE ENERGY</h6>
            </div>
            <div class="col text-end">
                <i class="bi bi-person-circle text-white text-2xl text-stroke"></i>
            </div>
        </div>

        <div class="text-center text-3xl font-bold mb-10">
            <h1>Bienvenu</h1>
        </div>
        <hr class="text-black border-2">
        <div class="flex justify-between py-4">

        <a href="{{url('/invite')}}">
                <div class="text-start font-bold text-xl">
                    <span class="p-3">
                        Inviter
                    </span>
                </div>
            </a>

            <a href="{{url('/recharger')}}">
                <div class="text-center font-bold text-xl">
                    <span class="p-3">
                        Recharger
                    </span>
                </div>
            </a>

            <a href="{{url('/retrait')}}">
                <div class="text-end font-bold text-xl">
                    <span class="p-3">
                        Retirer
                    </span>
                </div>
            </a>
        </div>

        <hr class="text-black border-2 mb-5">

        <h2 class="text-center underline text-2xl font-bold"><u>Partenaires</u></h2>

        <div class="flex justify-between mt-5">
            <div class="flex justify-center">
                <img src="images/logo1.jpg" class="w-5/6 h-full" alt="###">
            </div>
            <div class="flex justify-center">
                <img src="images/logo2.jpg" class="w-5/6 h-full" alt="###">
            </div>
            <div class="flex justify-center">
                <img src="images/logo3.jpg" class="w-5/6 h-full" alt="###">
            </div>
        </div>
    </div>  

@endsection