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
        <form action="{{url('/recharger/choix/confirmUSDT') }}" method="post" class="form-group" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <div class="form-floating mb-3">
                    <input type="number" class="form-control inp" name="montant" id="floatingInput" placeholder="Entrer votre montant" required>
                    <label for="floatingInput">Entrer votre montant</label>
                </div>
            </div>
            <div class="mb-4">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control inp" name="addresse" disabled value="Trc20-öoubvwibulihsdavhzvsdzuv" id="floatingEmail" placeholder="Adresse électronique" required>
                    <label for="floatingEmail">Adresse électronique</label>
                </div>
            </div>
            <div class="mb-4">
                <div class="form-floating mb-3">
                    <input type="file" class="form-control inp" name="transaction_image" id="floatingFile" placeholder="Image de transaction" required>
                    <label for="floatingFile">Image de transaction</label>
                </div>
            </div>
            <div class="text-center mb-3">
                <div class="d-grid gap-1">
                    <input type="submit" value="Soumettre" class="btn btn-primary rounded-4 fw-bold">
                </div>                    
            </div>
        </form>
        
    </div>

</div>

@endsection