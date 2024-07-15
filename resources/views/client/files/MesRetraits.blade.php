
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
                <th class="py-3 px-4 border-b border-e border-white">#</th>
                <th class="py-3 px-4 border-b border-e border-white">Moyen</th>
                <th class="py-3 px-4 border-b border-e border-white">Somme ( $ ) </th>
                <th class="py-3 px-4 border-b border-e border-white">Status</th>
            </thead>

            <tbody>
                <tr class="fw-bold" >
                    <td class="py-3 px-4 border-b border-e border-white">1</td>
                    <td class="py-3 px-4 border-b border-e border-white">Mtn</td>
                    <td class="py-3 px-4 border-b border-e border-white">10000</td>
                    <td class="py-3 px-4 border-b border-e border-white text-warning">En cours</td>
                </tr>

                <tr class="fw-bold">
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
                </tr>
            </tbody>
        </table>
    </div>

</div>

@endsection