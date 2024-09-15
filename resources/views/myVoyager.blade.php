@extends('layouts.main')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Pacchetti di Viaggio</h1>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nome Pacchetto</th>
                    <th>Descrizione</th>
                    <th>Prezzo</th>
                    <th>Data Partenza</th>
                    <th>Data Ritorno</th>
                    <th>Luogo Partenza</th>
                    <th>Destinazione</th>
                    <th>Numero Giorni</th>
                    <th>Numero Posti</th>
                    <th>Disponibile</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($travel_packages as $pacchetto)
                    <tr>
                        <td>{{ $pacchetto->nome_pacchetto }}</td>
                        <td>{{ $pacchetto->descrizione }}</td>
                        <td>{{ number_format($pacchetto->prezzo, 2, ',', '.') }} €</td>
                        <td>{{ $pacchetto->data_partenza }}</td>
                        <td>{{ $pacchetto->data_ritorno }}</td>
                        <td>{{ $pacchetto->luogo_partenza }}</td>
                        <td>{{ $pacchetto->destinazione }}</td>
                        <td>{{ $pacchetto->numero_giorni }}</td>
                        <td>{{ $pacchetto->numero_posti }}</td>
                        <td>{{ $pacchetto->disponibile ? 'Sì' : 'No' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

<style>
    .table td,
    .table th {
        white-space: nowrap;
        padding: 1rem;
    }
</style>
