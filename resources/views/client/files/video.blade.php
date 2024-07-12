@extends('client.master')

@section('title')
    Video
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
                <span class="letter">V</span>
                <span class="letter">I</span>
                <span class="letter">D</span>
                <span class="letter">E</span>
                <span class="letter">O</span>
                <span class="letter">S</span>
            </h3>
        </div>
        <div class="col text-end">
            <i class="bi bi-people"></i>
        </div>
    </div>

    <div class="text-center text-light">
        <p>
            Ici vous verez les videos qui 
            vous expliquerons comment 
            faire une recharge et un retrait
            
        </p>
    </div>

    <div class="contenair fw-bold text-light mb-2 text-center">
        <h3><u>Video de recharge</u></h3>
    </div>
    <div class="container text-center">
        <video width="600" controls>
            <source src="images/video.mp4" type="video/mp4">
        </video>
    </div>

    <div class="contenair fw-bold text-light mb-2 text-center">
        <h3><u>Video de retrait</u></h3>
    </div>
    <div class="container text-center">
        <video width="600" controls>
            <source src="images/video.mp4" type="video/mp4">
        </video>
    </div>

</div>

@endsection