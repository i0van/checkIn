@extends('layouts.app')
<link rel="stylesheet" href="/css/home.css">
@section('content')
<div class="container">

    <b>Tabela sa dnevnim prikazom zaposlenih.</b>
    <table style="width:100%">
        <tr>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Vreme ulaza</th>
            <th>Vreme izlaza</th>
        </tr>
        <!-- Ovde treba neka for petlja koja ispisuje sve korisnike koji su se taj dan prijavili
        da su na poslu, u polje vreme ulaza
        -->
        <tr>
            <td>Danijela</td>
            <td>Bulović</td>
            <td>50</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Milica</td>
            <td>Dikić</td>
            <td>94</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Jovan</td>
            <td>Vukojevic</td>
            <td>94</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Marko</td>
            <td>Petrović</td>
            <td>94</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Igor</td>
            <td>Mijatović</td>
            <td>94</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Frenki</td>
            <td>Frenkić</td>
            <td>94</td>
            <td>50</td>
        </tr>
    </table>

</div>
@endsection
