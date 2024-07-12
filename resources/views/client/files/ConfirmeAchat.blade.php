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

    <div class="container">

        <div class="row bg-secondary pt-3 pb-4 rounded-4 mb-3">
            <div class="col text-start text-light">
                <h1>Barrage 1</h1>
                <p>Pourcentage/jour: 4.5% <br>
                Période de validitée: 365 Jours <br>
                [ 5$ ; 20$ ]</p>
            </div>
            <div class="col text-end">
                <img src="images/logo5.jpg" class="rounded-2 bar" alt="###">
            </div>

            <div class="text-center">
                <div class="mb-4">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control inp" id="floatingInput" placeholder="Numero de telephone">
                        <label for="floatingInput">Telephone</label>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <input type="button" value="Confirmer" class="btn btn-success rounded-4 Acha">
            </div>
        </div>

    </div>


</div>

@endsection