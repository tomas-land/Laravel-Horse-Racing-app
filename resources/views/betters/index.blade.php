@extends('layouts.app')
@section('content')

@if (session('status_success'))
<div class="alert ">
    <p style="color: green"><b>{{ session('status_success') }}</b></p>
</div>
@elseif(session('status_error'))
<div class="alert alert-danger">
    <p style="color: red"><b>{{ session('status_error') }}</b></p>
</div>
@endif
    <div class="card-body">
        <table class="table">
            <tr>
                <th>Vardas</th>
                <th>Pavarde</th>
                <th>Statoma suma(eur)</th>
                <th>Arklys</th>
                <th>Veiksmai</th>
            </tr>
            @foreach ($betters as $better)
                <tr>
                    <td>{{ $better->name }}</td>
                    <td>{{ $better->surname }}</td>
                    <td>{{ $better->bet }}</td>
                    <td>{{ $better->horse['name'] }}</td>
                    <td>
                        <form action={{ route('betters.destroy', $better->id) }} method="POST">
                            <a class="btn btn-success" href={{ route('betters.edit', $better->id) }}>Redaguoti</a>
                            @csrf @method('delete')
                            <input type="submit" class="btn btn-danger" value="Trinti" />
                        </form>
                    </td>

                </tr>
            @endforeach
        </table>
        <div>
            <a href="{{ route('betters.create') }}" class="btn btn-success">Pridėti</a>
        </div>
    </div>




    <div class="card-body">
        <form class="form-inline" action="{{ route('betters.index') }}" method="GET">
            <select name="horse_id" id="" class="form-control">
                <option value="" selected disabled>Pasirinkite arkli filtravimui:</option>
                @foreach ($horses as $horse)
                    <option value="{{ $horse->id }}" @if ($horse->id == app('request')->input('horse_id')) selected="selected" @endif>{{ $horse->name }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary">Filtruoti</button>
            <a class="btn btn-success" href={{ route('betters.index') }}>Rodyti visus</a>
        </form>
    </div>
@endsection
