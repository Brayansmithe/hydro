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
                <span class="letter">C</span>
                <span class="letter">A</span>
                <span class="letter">R</span>
                <span class="letter">T</span>
                <span class="letter">E</span>&nbsp;&nbsp;
                <span class="letter">B</span>
                <span class="letter">A</span>
                <span class="letter">C</span>
                <span class="letter">C</span>
                <span class="letter">A</span>
                <span class="letter">I</span>
                <span class="letter">R</span>
                <span class="letter">E</span>
            </h3>
        </div>
        <div class="col text-end">
            <i class="bi bi-currency-dollar"></i>        
        </div>
    </div>

    <div class="container">
        <p class="text-center text-light">
             <span class="text-danger">NB :</span> Pour toutes modifications, bien 
            vouloir contacter le service client
        </p>
    </div>

    <div class="container back p-3 text-light fw-bold">
        <p>Prénom : <span class="text-primary">Catherine</span> </p>
        <p>Nom : <span class="text-primary">Dongfack stanislass</span> </p>
        <p>Moyen de retrait : <span class="text-primary">Orange money</span> </p>
        <p>Numero du retrait : <span class="text-primary">689256789</span> </p>
    </div>

</div>

@endsection