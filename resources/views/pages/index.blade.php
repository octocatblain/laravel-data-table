@extends('layouts.app')

@section('content')
    <div class="section m-10">
        <div class="text-center mt-10 display-5">
            <h1 class="heading-3">Users</h1>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            @livewire('users-table')
        </div>
    </div>
@endsection
