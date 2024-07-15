@extends('client.master')

@section('title')
    RechageMtn
@endsection

@section('body')
    bg-black
@endsection

@section('content')

<div class="container">

@extends('client.head')

@section('menulink')
    recharger
@endsection

@section('menuname')
    RECHARGE
@endsection

@section('menuicone')
    bi bi-currency-dollar
@endsection

    <div class="container text-center text-light mb-5 mt-32">
        <p>Nom de compte: <span class="fw-bold">HYDRORENT</span></p>
        <p>*126*(...)*numero marchant*numero de compte*montant#</p>
        <p>Copier l’ID de la transaction et venir coller</p>
        <p>[SOUMETTRE]</p>
    </div>

    @if (Session::has('success'))
                      
        <div class="alert alert-success">
            {{Session::get('success')}}
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


    <div class="container">
        <form action="{{url('/recharger/choix/confirmUSDT') }}" method="post" class="form-group" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <div class="form-floating mb-3">
                    <input type="number" class="form-control inp" name="montant" id="floatingInput" placeholder="Entrer votre montant" required>
                    <label for="floatingInput">Entrer votre montant</label>
                </div>
            </div>
            <div class="mb-4">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control inp" name="addresse" disabled value="Trc20-öoubvwibulihsdavhzvsdzuv" id="floatingEmail" placeholder="Adresse électronique" required>
                    <label for="floatingEmail">Adresse électronique</label>
                </div>
            </div>
            <div class="mb-4">
                <div class="form-floating mb-3">
                    <input type="file" class="form-control inp" name="transaction_image" id="floatingFile" placeholder="Image de transaction" required>
                    <label for="floatingFile">Image de transaction</label>
                </div>
            </div>
            <div class="text-center mb-3">
                <div class="d-grid gap-1">
                    <input type="submit" value="Soumettre" class="btn bg-black border-white text-white  rounded-4 fw-bold">
                </div>                    
            </div>
        </form>
        
    </div>

</div>

@endsection