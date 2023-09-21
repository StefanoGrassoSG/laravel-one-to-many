@extends('layouts.app')

@section('page-title', 'Projects table')

@section('main-content')
    <div class="row">
        <div class="col">
            <h2 class="fw-bold">
                Insert New Project Data
            </h2>
            <form action="{{ route('admin.projects.store') }}" method="POST" class="d-flex justify-content-center mt-5 mb-3">
                @csrf
                <div class="w-50 me-2">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="name" id="floatingInput">
                        <label for="floatingInput">Name</label>
                      </div>
                      <div class="form-floating">
                        <input type="text" class="form-control" name="description" id="floatingInput">
                        <label for="floatingInput">Description</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <input type="date" class="form-control" name="start_date" id="floatingInput">
                        <label for="floatingInput">Start Date</label>
                      </div>
                      <div class="form-floating">
                        <input type="date" class="form-control" name="end_date" id="floatingInput">
                        <label for="floatingInput">End Date</label>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success mt-3">
                            Save
                        </button>
                    </div>
                </div>
                <div class="w-50 ms-2">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="project_status" id="floatingInput">
                        <label for="floatingInput">Project Status</label>
                      </div>
                      <div class="form-floating">
                        <input type="text" class="form-control" name="languages" id="floatingInput">
                        <label for="floatingInput">Languages</label>
                    </div>
                    <div class="form-floating mt-3">
                        <input type="text" class="form-control" name="project_link" id="floatingInput">
                        <label for="floatingInput">Project Link</label>
                    </div>
                </div>
            </form>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
             @endif
        </div>
    </div>
@endsection