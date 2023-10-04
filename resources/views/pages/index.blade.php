{{-- @extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="text-center mb-4">
            <h1 class="display-5">Users</h1>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <livewire:users-table>
        </div>
    </div>
@endsection --}}

@extends('layouts.app')
@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl text-center my-10">Users</h1>
        <livewire:users-table>
    </div>
@endsection
