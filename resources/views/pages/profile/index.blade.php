@extends('app')

@section('content')
    <h1 class="text-center">Introduction my self</h1>
    <div class="col-6 mx-auto">

        <div class="card">
            <div class="card-body">
                {{ $data['name'] }}
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                {{ $data['role'] }}
            </div>
        </div>
    </div>
@endsection
