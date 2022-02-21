@extends('layouts.base')

@section('content')
<div class="container">
  <div class="row">
    <div class="col">
      <h1>Trains</h1>
    </div>
  </div>
  <div class="row">
      @foreach ($trains as $train)
      <div class="col-4">
        <div class="card mb-3">
          <div class="card-body">
            <h5 class="card-title">Azienda: {{ $train->azienda }}</h5>
            <h5>Codice Treno: {{ $train->codice_treno }}</h2>
            <p class="card-text">Partenza: {{ $train->stazione_di_partenza }}</p>
            <p class="card-text">Arrivo: {{ $train->stazione_di_arrivo }}</p>
            <a href="{{ route('trains.show', $train) }}" class="btn btn-primary">View train</a>
          </div>
        </div>
      </div>
      @endforeach
  </div>
  {{-- <div class="row">
    <div class="col">
      {{$trains->links()}}
    </div>
  </div> --}}
</div>
@endsection