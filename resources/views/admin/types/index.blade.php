@extends('layouts.app')

@section('page-title', 'Type table')

@section('main-content')
    <div class="row">
        <div class="col">
            <a href="{{ route('admin.projects.create')}}" class="btn btn-success mb-3">
                +Add New Type
            </a>
            <table class="table table-dark table-striped">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($types as $type)
                        <tr>
                            <td>
                                {{ $project->id }}
                            </td>
                            <td>
                                {{ $project->name }}
                            </td>
                            <td>
                                {{ $project->slug }}
                            </td>
                            <td>
                                <a href="{{ route('admin.types.show', ['type' => $type->id]) }}" class="btn btn-primary w-100">
                                    View
                                </a>
                                <a href="{{ route('admin.types.edit', ['type' => $type->id]) }}" class="btn btn-warning w-100 my-2">
                                    Edit
                                </a>
                                <form action="{{ route('admin.types.destroy', ['type' => $type->id]) }}" method="post" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger w-100">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection