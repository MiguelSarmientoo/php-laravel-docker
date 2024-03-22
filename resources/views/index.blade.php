@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">DataCrud List</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Campo 1</th>
                                <th>Campo 2</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datacruds as $datacrud)
                                <tr>
                                    <td>{{ $datacrud->id }}</td>
                                    <td>{{ $datacrud->campo1 }}</td>
                                    <td>{{ $datacrud->campo2 }}</td>
                                    <td>
                                        <a href="{{ route('datacrud.show', $datacrud->id) }}" class="btn btn-primary">View</a>
                                        <a href="{{ route('datacrud.edit', $datacrud->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('datacrud.destroy', $datacrud->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <a href="{{ route('datacrud.create') }}" class="btn btn-success">Create DataCrud</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
