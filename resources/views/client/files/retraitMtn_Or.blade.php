@extends('client.master')

@section('title')
    Retraits
@endsection

@section('content')

<style>
    body{
        background-color: black;
    }
    .hidden {
        display: none;
    }
</style>

<div class="container">

    <div class="row mt-3 mb-4 text-light">
        <div class="col text-start">
            <i class="bi bi-arrow-left-circle"></i>
        </div>
        <div class="mt-2 col-8 text-center">
            <h3 class="texte">
                <span class="letter">C</span>
                <span class="letter">A</span>
                <span class="letter">R</span>
                <span class="letter">T</span>
                <span class="letter">E</span>&nbsp;&nbsp;
                <span class="letter">B</span>
                <span class="letter">A</span>
                <span class="letter">C</span>
                <span class="letter">C</span>
                <span class="letter">A</span>
                <span class="letter">I</span>
                <span class="letter">R</span>
                <span class="letter">E</span>
            </h3>
        </div>
        <div class="col text-end">
            <i class="bi bi-currency-dollar"></i>        
        </div>
    </div>

    <div class="container">
        <p class="text-center text-light">
             <span class="text-danger">NB : </span> Vous ne pourrez lier qu’une seule
            carte bancaire
        </p>
    </div>

    <div class="container">
        <form action="#" method="post" class="form-group">
            <div class="mb-4">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control inp" id="floatingInput" placeholder="Numero de telephone">
                    <label for="floatingInput">Entrer votre nom de carte</label>
                </div>
            </div>
            <div class="mb-4">
                <div class=" mb-3">
                    <select name="" id="choix" class="form-control inp">
                        <option value="">Moyen de retrait</option>
                        <option value="Orange_Money">Orange Money</option>
                        <option value="Mtn_Money">Mtn Money</option>
                        <option value="USDT_trc20">USDT trc20</option>
                    </select>
                </div>
            </div>
            <div class="mb-4" id="in1">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control inp" id="in1 floatingInput" placeholder="Numero de telephone">
                    <label for="floatingInput">Numero de carte</label>
                </div>
            </div>
            <div class="mb-4">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control inp" id="in2 floatingInput" placeholder="Numero de telephone">
                    <label for="floatingInput">Adresse USDT Trc20</label>
                </div>
            </div>
            <div class="text-center mb-3">
                <div class="d-grid gap-1">
                    <input type="button" value="Soumettre" class="btn btn-dark rounded-4 fw-bold">                  </div>                    
                  <div class="form-text text-end" id="basic-addon4">Mot de passe oublie ?</div>
            </div>

        </form>
    </div>

    <script>
        // document.getElementById('us').addEventListener('click', function() {
        //     document.getElementById('in1').style.display = 'none';
        // });


        document.getElementById('choix').addEventListener('change', function() {
            var selectedValue = this.value;

            var input1 = document.getElementById('in1');
            var input2 = document.getElementById('in2');

            var tt = 1;

            while(tt == 1){
                if (selectedValue === 'Orange_Money' || selectedValue === 'Mtn_Money') {
                    input2.classList.add('hidden');
                    input1.classList.remove('hidden');
                } else if (selectedValue === 'USDT_trc20') {
                    input1.classList.add('hidden');
                    input2.classList.remove('hidden');
                }  
            }


        });
    </script>

</div>

@endsection