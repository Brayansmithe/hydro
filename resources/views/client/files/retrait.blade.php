@extends('client.master')

@section('title')
    Retrait
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

<div class="container text-white mb-16">

@extends('client.head')

@section('menulink')
    compte
@endsection

@section('menuname')
    Retrait
@endsection

@section('menuicone')
    bi bi-currency-dollar
@endsection

    <div class="container text-center fw-bold mb-2">
        <h2 class="underline text-3xl font-bold mb-4">INFORMATIONS</h2>
    </div>
 
    <div class="contenu text-center">
       <h3>Minimum de retrait:3250 FCFA</h3>
    </div>  

    <div class="container text-center fw-bold mt-3 mb-2">
        <h2 class="underline text-3xl font-bold mb-4">Methodes</h2>
    </div>

    <div class="text-center">
        <p>
            Saisir le montant que vous voulez 
            retirer et cliquer sur Soumettre votre
            retrait sera traiter dans les 24h maxi
            après la soumition 
        </p>
    </div>

    <div class="container text-center fw-bold mt-3 mb-2">
        <h2 class="text-red"><u class="text-danger">Attention!!!</u></h2>
    </div>

    <div class="text-center">
        <p>
            Veuillez lier votre carte bancaire avant
            de soumettre votre demande de retrait
            (Apres la liaison tous des informations,
            Tout s’affichera ici) <br>
            
            CLiquez <a class="btn btn-success" href="{{url('moyen_ajouter/'.Auth::User()->id)}}">ici</a> pour voir vos informations 
            bancaires <br><br>

            NB: Vous ne pourrez lier qu’une seule
            carte bancaire  <a class="btn btn-success" href="{{url('/retraitMtn_Or')}}">ici</a> <br><br>
        </p>
    </div>

    <div class="container">
        <p>Nom de compte [....{{Auth::User()->nom}}....]</p>
        <p>Numero de compte [....{{Auth::User()->telephone}}....]</p>
        <p>Adresse / Numero Retrait [....{{ Auth::user()->numero_retrait ? Auth::user()->numero_retrait : Auth::user()->numero_retrait_address }}....]</p>
        <p>nom de retrait [....{{ Auth::user()->nom_carte ? Auth::user()->nom_carte : 'Veuillez lier une carte' }}....]</p>


        <p>Banque [{{ Auth::user()->moyen_retrait ? Auth::user()->moyen_retrait : 'veillez ajouter une banque' }}]</p>
    </div>

    <div class="mt-3 text-center mb-4">
        <a href="{{url('/retrait_ajouter')}}" class="btn text-white bg-black rounded-full">Cliquez pour retirer</a>
    </div>

</div>

@endsection