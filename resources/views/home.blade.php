{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')


@section('content')
    <main>
        @include('partials.jumbodrom')
        @include('partials.card')
        @include('partials.shopinfo')
    </main>
@endsection
