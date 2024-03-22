@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Create DataCrud</div>

                    <div class="card-body">
                        <form action="{{ route('datacrud.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="campo1">Campo 1</label>
                                <input type="text" name="campo1" id="campo1" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="campo2">Campo 2</label>
                                <input type="text" name="campo2" id="campo2" class="form-control" required>
                            </div>
                            <!-- Agrega aquí más campos si es necesario -->
                            <button type="submit" class="btn btn-primary">Create DataCrud</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
