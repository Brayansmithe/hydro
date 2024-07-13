@extends('client.master')

@section('title')
    Rechager
@endsection

@section('content')

<style>
    body{
        background-image: url('images/logo7.jpg');
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

    <div class="row mt-3 mb-5">
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

    <div class="container text-center fw-bold mb-4 const">
        <h2><u>INFORMATIONS</u></h2>
    </div>

    <form action="{{ url('/recharger/choix') }}" method="post">
        @csrf
        <div class="contenu text-center">
            <input type="radio" name="choix" value="1" class="mb-4">Orange Money <br>
            <input type="radio" name="choix" value="2" class="mb-4">Mtn Money <br>
            <input type="radio" name="choix" value="3" class="mb-4">USDT Trc20
        </div>  
        <div class="mt-3 text-center">
            <input type="submit" value="Cliquez pour recharger" class="btn btn-light rounded-4">
        </div> 
    </form>
    
              
 


</div>


@endsection