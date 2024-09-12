{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('hero')
    <div>HERO HOME</div>
@endsection

@section('content')
    <div class="container my-5">
        <h1>home</h1>
        <img src="{{ Vite::asset('resources/img/colibri.jpg') }}" alt="" class="img-fluid">
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum optio voluptatum autem quae nam? Animi
            recusandae suscipit minima non repellendus doloremque, eaque velit tempore eligendi ea qui. Veritatis, eius
            voluptatum.
        </p>
    </div>
@endsection


@section('titlePage')
    home
@endsection
