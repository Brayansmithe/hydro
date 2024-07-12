@extends('client.master1')

@section('title')
    SignIn
@endsection

@section('content')

    <div class="container">

        <div class="mt-4 mb-3 text-center">
            <h1 class="fw-bold text-center">Connectez vous</h1>
        </div>

        <div class="text-center mb-5">
            <img src="images/logo.jpeg" class="rounded" alt="###">
            <h1>SPE ENERGY</h1>
        </div>

             @if (Session::has('erreur'))
                
                <div class="alert alert-danger">
                 {{Session::get('erreur')}}
                </div>
            @endif

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form action="{{url('/singnin/conecter')}}" method="post" class="form-group">
                            @csrf
                            <div class="mb-4">
                                <div class="form-floating mb-3">
                                    <input type="number" name="telephone" class="form-control inp" id="floatingInput" placeholder="Numero de telephone">
                                    <label for="floatingInput">Numero</label>
                                    @error('telephone')
                                        {{$message}}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="form-floating mb-3">
                                    <input type="password" name="motpass" class="form-control inp" id="floatingPassword" placeholder="Mot de passe">
                                    <label for="floatingPassword">Mot de passe</label>
                                </div>
                            </div>
                            <div class="text-center mb-3">
                                <div class="d-grid gap-1">
                                    <button type="submit" class="btn btn-dark rounded-4">Connexion</button>
                                </div>
                                <div class="form-text text-end" id="basic-addon4">Mot de passe oublié ?</div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        
    </div>
@endsection

    