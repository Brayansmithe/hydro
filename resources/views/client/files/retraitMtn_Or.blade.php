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


    <div class="container mt-32 mb-3">
        <p class="text-center text-white text-xl font-bold">
             <span class="text-danger">NB : </span> Vous ne pourrez lier qu’une seule
            carte bancaire
        </p>
    </div>

    <div class="container">
        @if (Session::has('success'))
                      
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
        @if (Session::has('erreur'))
                      
            <div class="alert alert-warning">
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
        <form action="{{ url('/retrait/moyen/'.Auth::User()->id) }}" method="post" class="form-group">
            @csrf
            <div class="mb-4">
                <div class="form-floating mb-3">
                    <input type="text" name="nom_de_carte" class="form-control inp" id="floatingInput" placeholder="Nom de la carte" required>
                    <label for="floatingInput">Entrer votre nom de carte</label>
                </div>
            </div>
            <div class="mb-4">
                <div class="mb-3">
                    <select name="moyen_de_retrait" id="choix" class="form-control inp" required>
                        <option value="">Moyen de retrait</option>
                        <option value="Orange_Money">Orange Money</option>
                        <option value="Mtn_Money">Mtn Money</option>
                        <option value="USDT_trc20">USDT trc20</option>
                    </select>
                </div>
            </div>
            <div class="mb-4 hidden" id="in1">
                <div class="form-floating mb-3">
                    <input type="number" name="numero_de_carte" class="form-control inp" id="floatingInput1" placeholder="Numero de carte">
                    <label for="floatingInput1">Numero de carte</label>
                </div>
            </div>
            <div class="mb-4 hidden" id="in2">
                <div class="form-floating mb-3">
                    <input type="text" name="adresse_usdt" class="form-control inp" id="floatingInput2" placeholder="Adresse USDT">
                    <label for="floatingInput2">Adresse USDT Trc20</label>
                </div>
            </div>
            <div class="text-center mb-3">
                <div class="d-grid gap-1">
                    <input type="submit" value="Soumettre" class="btn bg-black border-white text-white rounded-4 fw-bold">
                </div>
            </div>
        </form>
    </div>
    
    <script>
        document.getElementById('choix').addEventListener('change', function() {
            var selectedValue = this.value;
            var input1 = document.getElementById('in1');
            var input2 = document.getElementById('in2');
    
            if (selectedValue === 'Orange_Money' || selectedValue === 'Mtn_Money') {
                input2.classList.add('hidden');
                input1.classList.remove('hidden');
            } else if (selectedValue === 'USDT_trc20') {
                input1.classList.add('hidden');
                input2.classList.remove('hidden');
            } else {
                input1.classList.add('hidden');
                input2.classList.add('hidden');
            }
        });
    </script>
    

</div>

@endsection