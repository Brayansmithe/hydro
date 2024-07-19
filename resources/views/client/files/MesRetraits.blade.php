
@extends('client.master')

@section('title')
    Mes retrait
@endsection

@section('content')

<style>
    body{
        background-color: black;
    }
</style>

<div class="">

@extends('client.head')

@section('menulink')
    acceuil
@endsection

@section('menuname')
    MES RETRAITS
@endsection

@section('menuicone')
    bi bi-currency-dollar
@endsection

    

    <div class="text-center text-light mb-5 mt-32">
        <h3 class="text-2xl underline font-black"><u>STATUS DES RETRAITS</u></h3>
    </div>

    <div class="mx-1">
        <table class="text-white border  border-white ">
            <thead class="fw-bold text-lg">
                <th class="py-3 px-4 border-b border-e border-white">N°</th>
                <th class="py-3 px-4 border-b border-e border-white">Moyen</th>
                <th class="py-3 px-4 border-b border-e border-white">Somme (FCFA) </th>
                <th class="py-3 px-4 border-b border-e border-white">Status</th>
            </thead>

            <input type="hidden" value="{{$conte=1}}">

            <tbody>
                @foreach ($retraits as $retrait)
                    
                    <tr class="fw-bold" >
                        <td class="py-3 px-4 border-b border-e border-white">{{$conte}}</td>
                        <td class="py-3 px-4 border-b border-e border-white">@if ($retrait->montan_retrait)
                            {{$retrait->moyen_retrait}}
                        @else
                        {{$retrait->address_retrait}}

                        @endif

                    </td>
                        <td class="py-3 px-4 border-b border-e border-white">{{$retrait->address_retrait}}</td>

                        @if ($retrait->statut_retrait==1)

                            <td class="py-3 px-4 border-b border-e border-white text-warning">En cours</td>

                        @elseif($retrait->statut_retrait==0)

                         <td class="py-3 px-4 border-b border-e border-white text-danger">Echec</td>

                        @else
                        <td class="py-3 px-4 border-b border-e border-white text-success">Valider</td>

                        @endif
                    </tr>

                    <input type="hidden" value="{{$conte++}}">

                @endforeach
    
            </tbody>
        </table>
    </div>

</div>

@endsection