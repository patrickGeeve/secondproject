@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
      <h1>{{$dinner_table->number}}</h1>
      <p>{{$dinner_table->capacity}}</p>
      <p>{{$dinner_table->description}}</p>
    </div>
</div>

@endsection