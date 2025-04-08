@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Kisah: {{ ucwords(str_replace('-', ' ', $slug)) }}</h1>
        <p>Di sini nanti muncul cerita lengkapnya...</p>
    </div>
@endsection
