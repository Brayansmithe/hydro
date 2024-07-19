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
    retraits
@endsection

@section('menuicone')
    bi bi-currency-dollar
@endsection

    

    <div class="mt-10 text-white">

        <div class="flex justify-between items-center bg-stone-600  border-b-2 border-black">

            <div class="p-3 text-center">
                <p>{{Auth::user()->nom}}</p> 
            </div>

            <div class="p-3 text-center">
                <p>{{Auth::user()->telephone}}</p> 
            </div>

            <div class="p-3 text-center">
                <p><span>ID: </span>{{Auth::user()->id_genere}}</p> 
            </div>

        </div>

        <div class="flex justify-around items-center bg-stone-600 border-b-2 border-black">

            <div class="py-2 text-center">
                <p>{{Auth::user()->solde_user}} <span>(FCFA)</span></p> 
                <p>Solde</p>
            </div>

            <div class="py-2 text-center">
                <p>{{ $users->count() }}</p>
                <p>équipe</p>
            </div>

        </div>

        <div class="flex justify-around items-center bg-stone-600 border-b-2 border-black">

            <a href="{{url('/inviter')}}">
                <div class="p-3 text-center">
                    <p class="uppercase text-sm">Inviter</p> 
                </div>
            </a>

            <a href="{{url('/recharger')}}">
                <div class="p-3 text-center">
                    <p class="uppercase text-sm">Recharger</p> 
                </div>
            </a>

            <a href="{{url('/retrait')}}">
                <div class="p-3 text-center">
                    <p class="uppercase text-sm">Retirer</p> 
                </div>
            </a>

        </div>

    </div>


    <div class="container mt-4 mb-4">
        <p class="text-center text-light font-bold text-lg">
            <span class="text-danger font-bold text-2xl">NB :</span> Les retraits sont disponibles de 
                 lundi à samedi de 8h à 16h
        </p>
    </div>
    <div class="container">

        @if (Session::has('success'))
                      
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
    @if (Session::has('erreur'))
                  
        <div class="alert alert-danger">
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
                    <input type="submit" value="Soumettre" class="btn btn-primary border-white bg-black rounded-full font-bold">  
                 </div>                    
            </div>

        </form>
    </div>

</div>

@endsection