    @extends('client.master1')

    @section('title')
        Choix
    @endsection

    @section('content')

    <section class="m-5">
        <div class="flex justify-center my-4">
            <img class="w-96 md:text-center" src="assets/log.png" alt="cfdf">
        </div>

        <div class="flex justify-center my-4 ">
            <p class="font-bold text-lg ">
                Hydrorent est un site dédier a au barage hydro-éléctrique
            </p>
        </div>

        <a href="{{url('/signin')}}">
            <div class="flex justify-center mt-5 ">
                <button class="bg-black text-white p-2 text-xl font-bold  rounded-full w-80">Se connecter</button>
            </div>
        </a>
            <div class="flex justify-center my-4">
                <p class="text-gray-500 text-lg font-bold">Vous n'avez pas de compte ?</p>
            </div>

        <a href="{{url('/registration')}}">
             <div class="flex justify-center my-2">
                <button class="bg-black text-white p-2 text-xl font-bold  rounded-full w-80">Créer un compte</button>
            </div>
        </a>
       
    </section>

    @endsection
