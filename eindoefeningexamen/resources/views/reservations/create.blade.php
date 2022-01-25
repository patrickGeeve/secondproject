@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')

@endsection

@section('content')
<div class="container">
    <form  action="{{ route('reservations.store') }}" method="POST">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Name</label>
                <input type="tekst" class="form-control" name="name" placeholder="Name">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Phone number</label>
                    <input type="tekst" class="form-control" name="phone" placeholder="phone">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>email</label>
                        <input type="tekst" class="form-control" name="email" placeholder="email">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Date</label>
                            <input type="datetime-local" class="form-control" name="date" placeholder="Date">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Number of persons</label>
                                <input type="number" class="form-control" name="number_of_persons" placeholder="Number of persons">
                            </div>
        <button type="submit" class="btn btn-primary">Create reservation</button>
    </form>

</div>
@endsection