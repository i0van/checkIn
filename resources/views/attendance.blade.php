@extends('layouts.app')
<link rel="stylesheet" href="/css/home.css">
@section('content')
<div class="container">

    Ovde treba da postoji neka vrsta verifikacije. Da li je ulogovan korisnik
    uneo svoje ime? Ili se attendance strana moze odraditi tako sto se iz baze uzima
     ime i prezime ulogovanog korisnika i na stranici attendance postoji 2 radio dugmeta,
     dosao i otisao, gde ce korisnik da izabere jedno od njih i klikne na submit, gde ce
     se vreme dolaska ili odlaska zapisati u bazu. Licno mislim da je drugo resenje sa radio dugmicima bolje.
    <hr>

    <b>Forma za unos u firmu</b>
    <form action="" method="POST">
        <input type="text" name="ime" placeholder="Ime"><br>
        <input type="text" name="prezime" placeholder="Prezime"><br>
        <button type="submit" class="btn btn-primary">Salji</button>
    </form>
    <b>Jedno od ova dva resenja biramo, ako imate bolju ideju odradite ili preporucite.</b>
    <hr>
    <form action="" method="POST">
        <label>Dolazak</label>
        <input type="radio" name="izbor" value="dolazak"><br>
        <label>Odlazak</label>
        <input type="radio" name="izbor" value="odlazak"><br>
        <button type="submit" class="btn btn-primary">Salji</button>
    </form>

</div>
@endsection
