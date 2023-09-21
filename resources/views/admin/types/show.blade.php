@extends('layouts.app')

@section('page-title', $type->name)

@section('main-content')
    <div class="row">
        <div class="col">
            <h2 class="fw-bold">
                Your Type
            </h2>

            <div class="card w-50 p-3 bg-dark text-light fs-5">
                <div class="mb-1">
                   <span class="fw-bold">ID:</span> <span>{{ $type->id }}</span>
                </div>
                <div class="mb-1">
                    <span class="fw-bold">NAME:</span> <span>{{ $type->name }}</span>
                </div>
            </div>
        </div>
    </div>
@endsection