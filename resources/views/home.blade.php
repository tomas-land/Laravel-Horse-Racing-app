@extends('layouts.app')

@section('content')
    <div class="card-body">
        @auth
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            {{ __('You are logged in!') }}
        @endauth

    </div>
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">


        <div class="card-body">
            <table class="table">
                <tr>
                    <th>Vardas</th>
                    <th>Pavarde</th>
                    <th>Statoma suma(eur)</th>
                    <th>Arklys</th>

                </tr>
                @foreach ($betters as $better)
                    <tr>
                        <td>{{ $better->name }}</td>
                        <td>{{ $better->surname }}</td>
                        <td>{{ $better->bet }}</td>
                        <td>{{ $better->horse['name'] }}</td>
                    </tr>
                @endforeach
            </table>


        </div>



    @endsection
