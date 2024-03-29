@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col"><h1>Alle tafels</h1></div>
        <div class="col  d-flex justify-content-end">
            <a class=' align-self-end btn btn-primary' href={{route('dinner_tables.create')}}>Create new Dinner table</a>
        </div>
    </div>

    @isset($dinner_tables)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Number</th>
                    <th scope="col">Capacity</th>
                    <th scope="col">Description</th>
                    <th scope="col"></th>
                </tr>
            </thead>
        <tbody>
        @foreach ($dinner_tables as $dinner_table)

        <tr>
            <th>{{$dinner_table->number}}</th>
            <th>{{$dinner_table->capacity}}</th>
            <td>{{$dinner_table->description}}</td>
            <td> <a class=' align-self-end btn btn-primary'href={{route('dinner_tables.show',$dinner_table->id)}}>Show dinner table</a></td>
            {{-- <td>

                @if($dinner_table->orders->where('open', 1)->first() != null)
                    <a class="btn btn-primary" href="{{ route('orders.show', ['order' => $dinner_table->orders->where('open', 1)->first()->id]) }}"> Bewerk order</a>
                @else
                    <form action="{{ route('orders.store') }}" method="POST">
                        @csrf
                        <input type="hidden" value={{$dinner_table->id}} name="dinner_table_id">
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Maak nieuwe order</button>
                        </div>
                    </form>
                @endif
            </td> --}}
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

    @else
        <p> Er zijn geen tafels</p>
    @endif
@endsection