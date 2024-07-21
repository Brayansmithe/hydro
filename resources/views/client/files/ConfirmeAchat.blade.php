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
        @if (Session::has('error'))
                      
            <div class="alert alert-warning">
                {{Session::get('error')}}
            </div>
        @endif
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
            
                <li>
                    {{$error}}
                </li>
            
            </div>
        @endforeach
    <div class="row bg-stone-600 pt-3 pb-4 rounded-4 mb-3 items-center text-white">
            <div class="col-7 text-start mb-2">
                <h1 class="text-center font-bold text-xl">{{$barrages->nom}}</h1>

                <div class="flex justify-between mb-2">
                    <p>Pourcentage/jour:  </p>
                    <p class="text-end">{{$barrages->Pourcentage}} %</p>
                    
                </div>

                <div class="flex justify-between mb-2 items-center">
                    <p class="">période validitée:</p>
                    <p class="text-end">{{$barrages->periode}} Jours</p>
                    
                </div>

                <div class="flex justify-center mb-2">
                    <p class="font-bold text-2xl">[ {{$barrages->somDebut}}$ ; {{$barrages->somFin}}$ ]</p>
                </div>
                
                
            </div>
            <div class="col-5 text-end">
                <img src="{{ asset('assets/'.$barrages->image) }}" class="rounded-2 bar" alt="{{$barrages->nom}}">
            </div>
            <form action="{{ url('/confirm/achat/'.$barrages->id)}}" method="post">
              @csrf
                <div class="text-center">
                    <div class="mb-4">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control inp placeholder:text-gray-400 text-black" id="floatingInput" placeholder="Montant" name="montan" required>
                            <label class="text-gray-400" for="floatingInput">Montant</label>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    
                        <button type="submid" class="w-2/4 h-12 bg-green-500 rounded-full text-white">Acheter</button>

                    
                </div>
            </form>
        </div>

        

    </div>


</div>

@endsection