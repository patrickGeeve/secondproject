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
    @isset($products)
    <body>
        <div class="container mt-5">
            <a class="btn btn-primary" href="{{ route('reservations.index') }}"> to reservations</a>
            <table class="table table-bordered mb-5">
                <thead>
                    <tr class="table-success">
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>

                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td><a type="button" href={{route('products.show',$product->id)}} class="btn btn-primary">Show product</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                <div>
                    <a type="button" href={{route('products.create')}} class="btn btn-primary">Create product</a>
                </div>
        </div>
    </body>
</html>
@else
niks
@endisset
@endsection