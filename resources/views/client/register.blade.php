@extends('client.master1')

    @section('title')
        Register
    @endsection

    @section('body')
        
    @endsection

    @section('content')
    
    <section class="m-5">

        <div class="flex justify-center my-4 ">
            <p class="font-bold text-4xl">
                Créer un compte
            </p>
        </div>

       

        <div class="flex justify-center ">
            <div class=" border-black border-1 rounded-full flex justify-center w-12 ">
                <i class="fa-solid fa-user-plus text-blue-500 p-3"></i>
            </div>
        </div>

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
            @if (Session::has('erreur'))
                
                <div class="alert alert-danger">
                 {{Session::get('erreur')}}
                </div>
            @endif
            @if (Session::has('status'))
                
                <div class="alert alert-success">
                {{Session::get('status')}}
                </div>
            @endif

        <div class="form flex justify-center">
            <form action="{{url('/register/createUser')}}" method="POST" class="md:w-6/12" >
                @csrf
                <div class="flex justify-center ">
                    <input type="text" name="nom" placeholder="Nom" class="hover:fielsed placeholder:text-md outline-none border-b-2 border-black p-2 text-lg font-medium w-full">
                </div>
                <div class="flex justify-center mt-3 ">
                    <input type="text" name="telephone" placeholder="Téléphone" class="placeholder:text-md outline-none border-b-2 border-black p-2 text-lg font-medium w-full">
                    @error('telephone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                
                </div>
                <div class="flex justify-center mt-3 ">
                    <input id="password" type="password" name="motpass" placeholder="Mot de passe" class="placeholder:text-md outline-none border-b-2 border-black p-2 text-lg font-medium w-full">
                    <span class="border-b-2 border-black" onclick="togglePassword()">
                        
                        <i id="toggle-icon" class="fa-solid fa-eye  mt-4"></i>
                        
                    </span>
                </div>
                <p class="text-gray-300 text-sm font-bold mt-2">Minimun 6 caratères</p>
                <div class="flex justify-center mt-2 ">
                    <input id="password1" type="password" name="motpassconfirme" placeholder="Confirmer mot de passe" class="placeholder:text-md outline-none border-b-2 border-black p-2 text-lg font-medium  w-full">
                    <span class="border-b-2 border-black" onclick="togglePassword1()">
                        
                        <i id="toggle-icon1" class="fa-solid fa-eye  mt-4"></i>
                        
                    </span>
                </div>
                <div class="flex justify-center mt-2 ">
                    <input type="number" name="codeparain" placeholder="Code parainage" class="placeholder:text-md outline-none border-b-2 border-black p-2 text-lg font-medium  w-full">
                </div>
                <div class="flex justify-center mt-5 ">
                    <button class="bg-black text-white p-2 text-xl font-bold  rounded-full w-full">Créer un compte</button>
                </div>
                <div class="flex justify-between mt-3">
                    <p class="text-gray-500 text-sm font-bold">Avez vous un compte ?</p>
                    <a class="text-blue-500 text-sm font-bold" href="{{url('/signin')}}">Connectez-vous</a>
                </div>
            </form>
        </div>

        
        
    </section>

    <script>
        function togglePassword() {
            const passwordField = document.getElementById('password');
            const toggleIcon = document.getElementById('toggle-icon');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash'); // Changez l'icône à l'œil ouvert
            } else {
                passwordField.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye'); // Changez l'icône à l'œil fermé
            }
        }

        function togglePassword1() {
            const passwordField = document.getElementById('password1');
            const toggleIcon = document.getElementById('toggle-icon1');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash'); // Changez l'icône à l'œil ouvert
            } else {
                passwordField.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye'); // Changez l'icône à l'œil fermé
            }
        }
    </script>

    @endsection