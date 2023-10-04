@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <div class="d-flex justify-content-center align-items-center">
            @livewire('users-table')
        </div>
    </div>
@endsection
