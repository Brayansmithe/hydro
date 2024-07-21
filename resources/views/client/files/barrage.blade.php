@extends('client.master')

@section('title')
    Barrages
@endsection

@section('body')
    bg-black
@endsection

@section('content')

<div class="container">

@extends('client.head')

@section('menulink')
    acceuil
@endsection

@section('menuname')
    BARRAGES
@endsection

@section('menuicone')
bi bi-bar-chart
@endsection


    

    <div class="container text-light ">

        
    @foreach ($barrages as $barrage)
         <div class="row bg-stone-600 pt-3 pb-4 rounded-4 mb-3 items-center">
            <div class="col-7 text-start mb-2">
                <h1 class="text-center font-bold text-xl">{{$barrage->nom}}</h1>

                <div class="flex justify-between mb-2">
                    <p>Pourcentage/jour:  </p>
                    <p class="text-end">{{$barrage->Pourcentage}} %</p>
                    
                </div>

                <div class="flex justify-between mb-2 items-center">
                    <p class="">période validitée:</p>
                    <p class="text-end">{{$barrage->periode}} Jours</p>
                    
                </div>

                <div class="flex justify-center mb-2">
                    <p class="font-bold text-2xl">[ {{$barrage->somDebut}}$ ; {{$barrage->somFin}}$ ]</p>
                </div>
                
                
            </div>
            <div class="col-5 text-end">
                <img src="{{asset('assets/'.$barrage->image)}}" class="rounded-2 bar" alt="###">
            </div>
            <a href="{{url('ConfirmeAchat/'.$barrage->id)}}">
                <div class="text-center">
                  
                       <button type="submit" class="w-2/4 h-12 bg-black rounded-full text-white">Acheter</button>
                
               </div>
           </a>
        </div>
    @endforeach
        



</div>

@endsection