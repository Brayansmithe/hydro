@extends('client.master')

@section('title')
    Retraits
@endsection

@section('content')

<style>
    body{
        background-color: black;
    }
</style>

<div class="container">

    <div class="row mt-3 mb-4 text-light">
        <div class="col text-start">
            <i class="bi bi-arrow-left-circle"></i>
        </div>
        <div class="mt-2 col-8 text-center">
            <h3 class="texte">
                <span class="letter">R</span>
                <span class="letter">E</span>
                <span class="letter">T</span>
                <span class="letter">R</span>
                <span class="letter">A</span>
                <span class="letter">I</span>
                <span class="letter">T</span>
            </h3>
        </div>
        <div class="col text-end">
            <i class="bi bi-currency-dollar"></i>        
        </div>
    </div>

    <div class="container-fluid text-light mt-5">

        <div class="row bg-secondary pt-2 pb-2">
            <div class="col text-start">GUSTAVE</div>
            <div class="col text-center">673940273</div>
            <div class="col text-end">ID: 2389494</div>
        </div>
        
        <div class="row bg-secondary pt-2 pb-2">
            <div class="col text-start">
                10.000$ <br>
                <span>Solde</span>
            </div>
            <div class="col text-end">
                10 <br>
                <span>Equipe</span>
            </div>
        </div>

        <div class="row bg-secondary pt-2 pb-2">
            <div class="col text-start">Inviter</div>
            <div class="col text-center">Recharger</div>
            <div class="col text-end">Retirer</div>
        </div>

        <div class="container mt-4">
            <p class="text-center text-light">
                 <span class="text-danger">NB :</span> Les retraits sont disponibles de 
                 lundi à samedi de 8h à 16h
            </p>
        </div>

    </div>

    <div class="container">

        @if (Session::has('success'))
                      
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
    @if (Session::has('erreur'))
                  
        <div class="alert alert-warning">
            {{Session::get('erreur')}}
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
        <form action="{{url('/retrait/addRetreait/'.Auth::User()->id)}}" method="post" class="form-group">
            @csrf
            @method('put')
            <div class="mb-4">
                <div class="form-floating mb-3">
                    <input type="number" class="form-control inp" id="floatingInput" placeholder="Montant" required name="montant">
                    <label for="floatingInput">Montant</label>
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