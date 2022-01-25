@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')

@endsection

@section('content')
    


<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Laravel Pagination Demo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    </head>
    @isset($reservations)
    <body>
        <div class="container mt-5">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> to products</a>
            <table class="table table-bordered mb-5">
                <thead>
                    <tr class="table-success">
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Date</th>
                        <th scope="col">Number of persons</th>
                        <th scope="col">Table ID</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reservations as $reservation)
                    <tr>

                        <td>{{ $reservation->name }}</td>
                        <td>{{ $reservation->phone }}</td>
                        <td>{{ $reservation->email }}</td>
                        <td>{{ $reservation->date }}</td>
                        <td>{{ $reservation->number_of_persons }}</td>
                        <td>{{ $reservation->id }}</td>
                        <td><a type="button" href={{route('reservations.show',$reservation->id)}} class="btn btn-primary">Show reservation</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                <div>
                    <a type="button" href={{route('reservations.create')}} class="btn btn-primary">Create reservations</a>
                </div>
        </div>
    </body>
</html>
@else
niks
@endisset
@endsection