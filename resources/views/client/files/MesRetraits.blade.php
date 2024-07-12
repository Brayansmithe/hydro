@extends('client.master')

@section('title')
    Mes retraits
@endsection

@section('content')

<style>
    body{
        background-color: black;
    }
</style>

<div class="container">

    <div class="row mt-3 mb-4 text-light">
        <div class="col text-start">
            <i class="bi bi-arrow-left-circle"></i>
        </div>
        <div class="mt-2 col-8 text-center">
            <h3 class="texte">
                <span class="letter">M</span>
                <span class="letter">E</span>
                <span class="letter">S</span>&nbsp;&nbsp;
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

    <div class="text-center text-light mb-5">
        <h3><u>STATUS DES RETRAITS</u></h3>
    </div>

    <div class="container">
        <table class="table">
            <thead class="fw-bold">
                <th>#</th>
                <th>Moyen</th>
                <th>Somme</th>
                <th>Status</th>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Mtn</td>
                    <td>10000</td>
                    <td class="fw-bold text-warning">En cours</td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Orange</td>
                    <td>5000</td>
                    <td class="fw-bold text-danger">Echec</td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>USDT Trc20</td>
                    <td>15000</td>
                    <td class="fw-bold text-success">Valider</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

@endsection