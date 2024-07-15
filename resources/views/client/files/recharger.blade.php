@extends('client.master')

@section('title')
    Rechager
@endsection

@section('body')
    bg-cover bg-no-repeat bg-center min-h-screen text-shadow 
@endsection

@section('content')

<style>
    body{
        background-image: url('images/logo7.jpg');
    }
</style>

<div class="container text-white">

@extends('client.head')

@section('menulink')
    compte
@endsection

@section('menuname')
    RECHARGE
@endsection

@section('menuicone')
    bi bi-currency-dollar
@endsection


    <div class="container text-center fw-bold mb-4 const mt-52 ">
        <h2 class="underline text-3xl font-bold mb-4">INFORMATIONS</h2>
        <p class="text-2xl mb-4">Minimum de récharge: 5$</p>
        <h2 class="underline text-3xl font-bold mb-4">BANQUES</h2>
    </div>

    <div class="flex justify-center">
    <form action="{{ url('/recharger/choix') }}" method="post" class="text-center">
        @csrf
        <div class="contenu text-start">
            <input type="radio" name="choix" value="1" class="mb-4 text-2xl text-stroke"><label class="text-3xl font-bold underline"> Orange Money </label><br>
            <input type="radio" name="choix" value="2" class="mb-4 text-stroke "><label class="text-3xl font-bold underline">Mtn Money</label> <br>
            <input type="radio" name="choix" value="3" class="mb-4"><label class="text-3xl font-bold underline">USDT Trc20 </label>
        </div>  
        <div class="mt-3 text-center">
            <input type="submit" value="Cliquez pour recharger" class="btn btn-light rounded-4 border-0 text-white bg-black">
        </div> 
    </form>
    </div>
    
              
 


</div>


@endsection