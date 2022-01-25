@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')

@endsection

@section('content')
<div class="container">
    <form  action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Name</label>
                <input type="tekst" class="form-control" name="name" placeholder="Name">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Description</label>
                    <input type="tekst" class="form-control" name="description" placeholder="Description">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Price</label>
                        <input type="float" class="form-control" name="price" placeholder="Price">
                    </div>
        <button type="submit" class="btn btn-primary">Create product</button>
    </form>

</div>
@endsection