@extends('client.master')

@section('title')
    RechageMtn
@endsection

@section('content')

<style>
    body{
        background-color: black;
    }
</style>

<div class="container">

    <div class="row mt-3 mb-5 text-light">
        <div class="col text-start">
            <i class="bi bi-arrow-left-circle"></i>
        </div>
        <div class="mt-2 col-6 text-center">
            <h3 class="texte">
                <span class="letter">B</span>
                <span class="letter">A</span>
                <span class="letter">R</span>
                <span class="letter">R</span>
                <span class="letter">A</span>
                <span class="letter">G</span>
                <span class="letter">E</span>
                <span class="letter">S</span>
            </h3>
        </div>
        <div class="col text-end">
            <i class="bi bi-bar-chart"></i>        
        </div>
    </div>

    <div class="container text-light">

        <div class="row bg-secondary pt-3 pb-3 rounded-4 mb-3">
            <div class="col text-start">
                <h1>Barrage 1</h1>
                <p>Pourcentage/jour: 4.5% <br>
                Période de validitée: 365 Jours <br>
                40$</p>
            </div>
            <div class="col text-end">
                <img src="images/logo5.jpg" class="rounded-2 bar" alt="###">
            </div>
            <div class="text-center">
                <input type="button" value="En cours" class="btn btn-dark rounded-4 Acha">
            </div>
        </div>

        <div class="row bg-secondary pt-3 pb-3 rounded-4 mb-3">
            <div class="col text-start">
                <h1>Barrage 2</h1>
                <p>Pourcentage/jour: 4.7% <br>
                Période de validitée: 365 Jours <br>
                80$</p>
            </div>
            <div class="col text-end">
                <img src="images/logo5.jpg" class="rounded-2 bar" alt="###">
            </div>
            <div class="text-center">
                <input type="button" value="En cours" class="btn btn-dark rounded-4 Acha">
            </div>
        </div>

        <div class="row bg-secondary pt-3 pb-3 rounded-4 mb-3">
            <div class="col text-start">
                <h1>Barrage 1</h1>
                <p>Pourcentage/jour: 4.5% <br>
                Période de validitée: 365 Jours <br>
                10$</p>
            </div>
            <div class="col text-end">
                <img src="images/logo5.jpg" class="rounded-2 bar" alt="###">
            </div>
            <div class="text-center">
                <input type="button" value="En cours" class="btn btn-dark rounded-4 Acha">
            </div>
        </div>

        <div class="row bg-secondary pt-3 pb-3 rounded-4 mb-3">
            <div class="col text-start">
                <h1>Barrage 1</h1>
                <p>Pourcentage/jour: 4.5% <br>
                Période de validitée: 365 Jours <br>
                20$</p>
            </div>
            <div class="col text-end">
                <img src="images/logo5.jpg" class="rounded-2 bar" alt="###">
            </div>
            <div class="text-center">
                <input type="button" value="En cours" class="btn btn-dark rounded-4 Acha">
            </div>
        </div>
    </div>


</div>

@endsection