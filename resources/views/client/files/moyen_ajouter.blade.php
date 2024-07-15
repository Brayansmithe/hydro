@extends('client.master')

@section('title')
    Retraits
@endsection
@section('body')
    bg-black
@endsection

@section('content')


<div class="">

@extends('client.head')

@section('menulink')
    retrait
@endsection

@section('menuname')
    Carte bancaire
@endsection

@section('menuicone')
    bi bi-currency-dollar
@endsection

    <div class="container mb-3 mt-32">
        <p class="text-center text-light text-xl font-bold">
             <span class="text-danger">NB :</span> Pour toutes modifications, bien 
            vouloir contacter le service client
        </p>
    </div>

    <div class="container back p-3 text-light fw-bold">

        <div class="flex ">
            <p class="text-start">Prénom :  </p> <span class="text-primary text-end">Catherine</span>
        </div>

        <div class="flex">
        <p>Nom :  </p> <span class="text-primary">Dongfack stanislass</span>
        </div>

        <div class="flex">
            <p>Moyen de retrait : </p> <span class="text-primary">Orange money</span> 
        </div>

        <div class="flex">
            <p>Numero du retrait : </p> <span class="text-primary">689256789</span>
        </div>
        
        
        
        
    </div>

</div>

@endsection