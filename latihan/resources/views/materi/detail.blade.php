@extends('latihanLayout.master')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Materi Detail</h1>
    <div class="card">
        <div class="card-header">
            <h2>{{ $materi->title }}</h2>
        </div>
        <div class="card-body">
            <p>{{ $materi->description }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ url('/materi') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection
