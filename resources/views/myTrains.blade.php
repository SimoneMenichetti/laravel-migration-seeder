{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    <div class="container my-5">
        <h1>I miei treni</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Azienda</th>
                    <th scope="col">stazione_partenza</th>
                    <th scope="col">stazione_arrivo</th>
                    <th scope="col">orario_partenza</th>
                    <th scope="col">orario_arrivo</th>
                    <th scope="col">codice_treno</th>
                    <th scope="col">numero_carrozza</th>
                    <th scope="col">in_orario</th>
                    <th scope="col">cancellato</th>
                    <th scope="col"> data_partenza</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <th>{{ $train->id }}</th>
                        <td>{{ $train->azienda }}</td>
                        <td>{{ $train->stazione_partenza }}</td>
                        <td>{{ $train->stazione_arrivo }}</td>
                        <td>{{ $train->orario_partenza }}</td>
                        <td>{{ $train->orario_arrivo }}</td>
                        <td>{{ $train->codice_treno }}</td>
                        <td>{{ $train->numero_carrozza }}</td>
                        <td>{{ $train->in_orario }}</td>
                        <td>{{ $train->cancellato }}</td>
                        <td>{{ $train->data_partenza }}</td>
                    </tr>
                @endforeach



            </tbody>
        </table>
    </div>
@endsection

@section('titlePage')
    i miei treni
@endsection

@section('hero')
    <div>HERO CONTACTS</div>
@endsection
