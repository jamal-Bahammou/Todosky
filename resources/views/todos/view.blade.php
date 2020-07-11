@extends('layouts.app')

@section('content')
    <h1 class="text-center mt-5">{{ $todo->name }}</h1>
    <div class="row justify-content-center my-5">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header font-weight-bold">DETAILS</div>
                <div class="card-body">
                    <p>{{ $todo->description }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection