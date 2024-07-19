@extends('client.master')

@section('title')
    Mes recharges
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
    MES RECHARGES
@endsection

@section('menuicone')
    bi bi-currency-dollar
@endsection

    

    <div class="text-center text-light mb-5 mt-32">
        <h3 class="text-2xl underline font-black"><u>STATUS DES RECHARGES</u></h3>
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
                @foreach ($recharges as $recharge)
                    
                    <tr class="fw-bold" >
                        <td class="py-3 px-4 border-b border-e border-white">{{$conte}}</td>
                        <td class="py-3 px-4 border-b border-e border-white">@if ($recharge->montant)
                            {{$recharge->operateur}}
                        @else
                        {{$recharge->address_si_usdt}}

                        @endif

                    </td>
                        <td class="py-3 px-4 border-b border-e border-white">{{$recharge->montant}}</td>

                        @if ($recharge->status_recharge==1)
                            <td class="py-3 px-4 border-b border-e border-white text-warning">En cours</td>

                        @elseif($recharge->status_recharge==0)
                         <td class="py-3 px-4 border-b border-e border-white text-danger">Echec</td>

                        @else
                        <td class="py-3 px-4 border-b border-e border-white text-success">Valider</td>

                        @endif
                    </tr>

                    <input type="hidden" value="{{$conte++}}">

                @endforeach
               

                {{-- <tr class="fw-bold">
                    <td class="py-3 px-4 border-b border-e border-white">2</td>
                    <td class="py-3 px-4 border-b border-e border-white">Orange</td>
                    <td class="py-3 px-4 border-b border-e border-white">5000</td>
                    <td class="py-3 px-4 border-b border-e border-white text-danger">Echec</td>
                </tr>

                <tr class="fw-bold">
                    <td class="py-3 px-4 border-b border-e border-white">3</td>
                    <td class="py-3 px-4 border-b border-e border-white">USDT Trc20</td>
                    <td class="py-3 px-4 border-b border-e border-white">15000</td>
                    <td class="py-3 px-4 border-b border-e border-white text-success">Valider</td>
                </tr> --}}
            </tbody>
        </table>
    </div>

</div>

@endsection