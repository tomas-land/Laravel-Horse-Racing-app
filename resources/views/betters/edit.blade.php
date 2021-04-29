@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Redaguoti lazybinika:</div>
                    <div class="card-body">
                        <form action="{{ route('betters.update', $better->id) }}" method="POST">
                            @csrf
                            @method("PUT")
                            <div class="form-group">
                                <label>Vardas: </label>
                                <input type="text" name="name" value="{{ $better->name }}" class="form-control">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Pavarde: </label>
                                <input type="text" name="surname" value="{{ $better->surname }}" class="form-control">
                                @error('surname')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Statoma suma(eur): </label>
                                <input type="number" name="bet" value="{{ $better->bet }}" class="form-control">
                                @error('bet')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Pasirinkite arkli: </label>
                                <select name="horse_id" id="" class="form-control">
                                    <option value=" " selected disabled>{{ $better->horse['name'] }}</option>
                                    @foreach ($horses as $horse)
                                        <option value="{{ $horse->id }}">{{ $horse->name }}</option>
                                    @endforeach
                                </select>
                                @error('horse_id')
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
