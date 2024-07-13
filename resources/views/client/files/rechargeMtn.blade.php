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
        <p>*126*(...)*numero marchant*numero de compte*montant#</p>
        <p>Copier l’ID de la transaction et venir coller</p>
        <p>[SOUMETTRE]</p>
    </div>

    @if (Session::has('success'))
                      
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif

    @if (count($errors) >0)
        <ul>
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                
                    <li>
                        {{$error}}
                    </li>
                
                </div>
            @endforeach
        </ul>
    @endif

    <div class="container">
        <form action="{{ url('/recharger/choix/confirmMTN') }}" method="post" class="form-group">
            @csrf
            <div class="mb-4">
                <div class="form-floating mb-3">
                    <input type="number" name="montant" class="form-control inp" id="floatingInput" placeholder="Entrer votre montant" required>
                    <label for="floatingInput">Entrer votre montant</label>
                </div>
            </div>
            <div class="mb-4">
                <div class="form-floating mb-3">
                    <input type="number" name="numero_payeur" class="form-control inp" id="floatingInput" placeholder="Numero du payeur" required>
                    <label for="floatingInput">Numero du payeur</label>
                </div>
            </div>
            <div class="mb-4">
                <div class="form-floating mb-3">
                    <input type="text" name="transaction_id" class="form-control inp" id="floatingInput" placeholder="Coller l'ID de transaction" required>
                    <label for="floatingInput">Coller l'ID de transaction</label>
                </div>
            </div>
            <div class="text-center mb-3">
                <div class="d-grid gap-1">
                    <input type="submit" value="Soumettre" class="btn btn-dark rounded-4 fw-bold">
                </div>
                <div class="form-text text-end" id="basic-addon4">Mot de passe oublie ?</div>
            </div>
        </form>
    </div>

</div>

@endsection