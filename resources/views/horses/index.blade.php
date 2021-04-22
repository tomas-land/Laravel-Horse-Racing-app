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
    <th>Laimetos</th>
    <th>Dalyvauta</th>
    <th>aprasymas</th>
    <th>veiksmai</th>
    </tr>
    @foreach ($horses as $horse)
    <tr>
    <td>{{ $horse->name }}</td>
    <td>{{ $horse->runs }}</td>
    <td>{{ $horse->wins }}</td>
    <td>{{ $horse->about }}</td>
    <td>
        <form action={{ route('horses.destroy', $horse->id) }} method="POST">
        <a class="btn btn-success" href={{ route('horses.edit', $horse->id) }}>Redaguoti</a>
        @csrf @method('delete')
        <input type="submit" class="btn btn-danger" value="Trinti"/>
        </form>
        </td>
       
    </tr>
    @endforeach
    </table>
    <div>
    <a href="{{ route('horses.create') }}" class="btn btn-success">Pridėti</a>
    </div>
   </div>
   
@endsection