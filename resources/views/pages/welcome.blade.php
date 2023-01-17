@extends('layouts.app')
@section('main-content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">Codice Treno</th>
        <th scope="col">Carrozze</th>
        <th scope="col">Stazione Partenza</th>
        <th scope="col">Stazione Arrivo</th>
        <th scope="col">Orario Partenza</th>
        <th scope="col">Orario Arrivo</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Disponibilità</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($trains as $elem)
        <tr>
            <td>{{ $elem->codice_treno}}</td>
            <td>{{ $elem->n_carrozze}}</td>
            <td>{{ $elem->stazione_partenza}}</td>
            <td>{{ $elem->stazione_arrivo}}</td>
            <td>{{ $elem->orario_partenza}}</td>
            <td>{{ $elem->orario_arrivo}}</td>
            <td>{{ $elem->prezzo}}</td>
            <td>{{ $elem->is_available}}</td>
        </tr>
        @endforeach

    </tbody>
  </table>
@endsection
