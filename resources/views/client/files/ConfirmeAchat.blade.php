@extends('client.master')

@section('title')
    confirme Achat
@endsection

@section('body')
    bg-black
@endsection

@section('content')

<div class="container">

@extends('client.head')

@section('menulink')
    barrage
@endsection

@section('menuname')
    BARRAGES
@endsection

@section('menuicone')
bi bi-bar-chart
@endsection

    <div class="container mt-32">

    <div class="row bg-stone-600 pt-3 pb-4 rounded-4 mb-3 items-center text-white">
            <div class="col-7 text-start mb-2">
                <h1 class="text-center font-bold text-xl">Barrage 1</h1>

                <div class="flex justify-between mb-2">
                    <p>Pourcentage/jour:  </p>
                    <p class="text-end">4.5%</p>
                    
                </div>

                <div class="flex justify-between mb-2 items-center">
                    <p class="">période validitée:</p>
                    <p class="text-end">365Jours</p>
                    
                </div>

                <div class="flex justify-center mb-2">
                    <p class="font-bold text-2xl">[ 5$ ; 20$ ]</p>
                </div>
                
                
            </div>
            <div class="col-5 text-end">
                <img src="images/logo5.jpg" class="rounded-2 bar" alt="###">
            </div>
            <div class="text-center">
                <div class="mb-4">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control inp placeholder:text-gray-400 text-black" id="floatingInput" placeholder="Montant">
                        <label class="text-gray-400" for="floatingInput">Montant</label>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <input type="button" value="Acheter" class="w-2/4 h-12 bg-green-500 rounded-full text-white">
            </div>
        </div>

        

    </div>


</div>

@endsection