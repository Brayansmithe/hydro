@extends('client.master')

@section('title')
    RechageOrange
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
                <span class="letter">R</span>
                <span class="letter">E</span>
                <span class="letter">C</span>
                <span class="letter">H</span>
                <span class="letter">A</span>
                <span class="letter">R</span>
                <span class="letter">G</span>
                <span class="letter">E</span>
                <span class="letter">R</span>
            </h3>
        </div>
        <div class="col text-end">
            <i class="bi bi-currency-dollar"></i>        
        </div>
    </div>

    <div class="container text-center text-light">
        <p>Nom de compte: <span class="fw-bold">HYDRORENT</span></p>
        <p>#150*(...)*numero marchant*numero de compte*montant#</p>
        <p>Copier l’ID de la transaction et venir coller</p>
        <p>[SOUMETTRE]</p>
    </div>

    <div class="container">
        <form action="#" method="post" class="form-group">
            <div class="mb-4">
                <div class="form-floating mb-3">
                    <input type="number" class="form-control inp" id="floatingInput" placeholder="Numero de telephone">
                    <label for="floatingInput">Entrer votre montant</label>
                </div>
            </div>
            <div class="mb-4">
                <div class="form-floating mb-3">
                    <input type="number" class="form-control inp" id="floatingInput" placeholder="Mot de passe">
                    <label for="floatingInput">Numero du payeur</label>
                </div>
            </div>
            <div class="mb-4">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control inp" id="floatingInput" placeholder="Mot de passe">
                    <label for="floatingInput">Coller l'ID de transaction</label>
                </div>
            </div>
            <div class="text-center mb-3">
                <div class="d-grid gap-1">
                    <input type="button" value="Soumettre" class="btn btn-dark rounded-4 fw-bold">                  </div>                    
                  <div class="form-text text-end" id="basic-addon4">Mot de passe oublie ?</div>
            </div>

        </form>
    </div>

</div>

@endsection