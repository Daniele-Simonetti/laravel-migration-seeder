@extends('layouts.base')

@section('content')
@dd($trains)
@foreach ($trains as $train)
{{-- <div>
  <h1>{{ $trains['azienda']}}</h1>
</div> --}}
    
@endforeach
@endsection