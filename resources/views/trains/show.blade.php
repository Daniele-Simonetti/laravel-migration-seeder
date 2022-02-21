@extends('layouts.base')

@section('content')
<div class="container">
  <div class="row">
      <div class="col">
        <div class="card mb-3">
          <div class="card-body text-center">
            <h5 class="card-title">Azienda: {{ $train->azienda }}</h5>
            <h5>Codice Treno: {{ $train->codice_treno }}</h2>
            <p class="card-text">Partenza: {{ $train->stazione_di_partenza }}</p>
            <p>Orario: {{ $train->orario_di_partenza }}</p>
            <p class="card-text">Arrivo: {{ $train->stazione_di_arrivo }}</p>
            <p>Orario: {{ $train->orario_di_arrivo }}</p>
            <h4>numero carrozze: {{ $train->numero_carrozze }}</h4>
            <a href="{{ route('trains.index', $train) }}" class="btn btn-primary">View Trains</a>
          </div>
        </div>
      </div>
  </div>
</div>
@endsection