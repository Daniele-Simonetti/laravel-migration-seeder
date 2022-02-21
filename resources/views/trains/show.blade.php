@extends('layouts.base')

@section('content')
<div class="container">
  <div class="row">
    <div class="col">
      <h1>{{ $train->azienda }}</h1>
    </div>
  </div>
  <div class="row">
      <div class="col">
        <div class="card mb-3">
          <div class="card-body text-center">
            <h1 class="card-title">{{ $train->azienda }}</h1>
            <p class="card-text">{{ $train->stazione_di_partenza }}</p>
            <p class="card-text">{{ $train->stazione_di_arrivo }}</p>
          </div>
        </div>
      </div>
  </div>
</div>
@endsection