@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Redaguoti arkli:</div>
                    <div class="card-body">
                        <form action="{{ route('horses.update', $horse->id) }} " method="POST">
                            @csrf
                            @method("PUT")
                            <div class="form-group">
                                <label>Vardas: </label>
                                <input type="text" name="name" value="{{ $horse->name }}" class="form-control">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Dalyvauta: </label>
                                <input type="text" name="runs" value="{{ $horse->runs }}" class="form-control">
                                @error('runs')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Laimeta: </label>
                                <input type="number" name="wins" value="{{ $horse->wins }}" class="form-control">
                                @error('wins')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Aprašymas: </label>
                                    <textarea id="mce" name="about" value="" rows=10 cols=100
                                        class="form-control">{{ $horse->about }}</textarea>
                                </div>
                                @error('about')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
