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

<div class="container text-light">

    <div class="row mt-3 mb-4">
        <div class="col text-start">
            <i class="bi bi-arrow-left-circle"></i>
        </div>
        <div class="mt-2 col-6 text-center">
            <h3 class="texte">
                <span class="letter">R</span>
                <span class="letter">E</span>
                <span class="letter">T</span>
                <span class="letter">R</span>
                <span class="letter">A</span>
                <span class="letter">I</span>
                <span class="letter">T</span>
                <span class="letter">S</span>
            </h3>
        </div>
        <div class="col text-end">
            <i class="bi bi-currency-dollar"></i>        
        </div>
    </div>

    <div class="container text-center fw-bold mb-2">
        <h2><u>INFORMATIONS</u></h2>
    </div>
 
    <div class="contenu text-center">
       <h3>Minimum de retrait:3250 FCFA</h3>
    </div>  

    <div class="container text-center fw-bold mt-3 mb-2">
        <h2><u>Methodes</u></h2>
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
            carte bancaire <br><br>
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
        <a href="{{url('/retrait_ajouter')}}" class="btn btn-primary rounded-4">Cliquez pour retirer</a>
    </div>

</div>

@endsection