@extends('layouts.app')

@section('content')
    <h1 class="text-center mt-5">TODOS PAGE</h1>
    <div class="row justify-content-center my-5">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header font-weight-bold">TODAY TODOS</div>
                <div class="card-body">

                    <ul class="list-group">
                        @foreach ($todos as $todo)
                            <li class="list-group-item">
                                {{ $todo->name }}
                            <a href="/todos/{{$todo->id}}" class="btn btn-primary btn-sm float-right">View</a>
                            </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
@endsection