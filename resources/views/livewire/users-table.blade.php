<div class="container" wire:poll.keep-alive>
    {{-- create user button --}}
    <div class="row mt-3 justify-content-between ">
        <div class="col-4 d-flex align-items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Users') }}
            </h2>
        </div>
        <div class="col-2 d-flex align-items-center justify-content-start">

            <p> {{ $total }} entries</p>
        </div>
        <div class="col-4 d-flex justify-content-end ">
            <p class="text-bold mx-2 d-flex align-items-center">User Role: </p>
            <select name="role" id="role" wire:model.live='role'
                class=" rounded bg-gray-200 text-gray-200  px-3 leading-tight pt-0 focus:outline-none focus:bg-white focus:border-gray-500">
                <option value="all">All</option>
                <option value="1">Admin</option>
                <option value="0">Member</option>
            </select>
        </div>
    </div>

    <hr class="my-4" />
    {{-- session message --}}

    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            <strong>Success!</strong> {{ session('message') }}
            {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
        </div>
    @elseif(session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            <strong>Error!</strong> {{ session('error') }}
            {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
        </div>
    @endif

    <div class="row justify-content-between pb-4">
        <div class="col-4">
            <input type="text" id="search" name="search" wire:model.live.debounce.300ms="search"
                class="form-control rounded bg-gray-200 text-gray-200 py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                placeholder="Search users...">
        </div>
        <div class="col-2">
            <select name="order_by" id="order_by" wire:model='orderBy'
                class="form-control rounded bg-gray-200 text-gray-200 py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                <option value="id">ID</option>
                <option value="name">Name</option>
                <option value="email">Email</option>
                <option value="created_at">Sign up date</option>
            </select>

        </div>
        <div class="col-2">
            <select name="sort_by" id="sort_by" wire:model='orderAsc'
                class="form-control rounded bg-gray-200 text-gray-200 py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                <option value="1">Ascending</option>
                <option value="0">Descending</option>
            </select>
        </div>
        <div class="col-2">
            <select name="pagination" id="pagination" wire:model.live='perPage'
                class="form-control rounded bg-gray-200 text-gray-200 py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                <option>10</option>
                <option>25</option>
                <option>50</option>
                <option>75</option>
            </select>
        </div>
        <div class="col-2">
            <button wire:click='deleteUsers' type="button" class="btn btn-outline-danger py-2 px-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-trash3" viewBox="0 0 16 16">
                    <path
                        d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z">
                    </path>
                </svg>
                Delete
            </button>
        </div>
    </div>


    @if ($users->count() > 0)
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr wire:key='{{ $user->id }}'>
                        <td>
                            <input wire:model='selected' value="{{ $user->id }}" type="checkbox" name="checkbox"
                                id="checkbox">
                        </td>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="{{ $user->is_admin ? 'text-danger' : 'text-secondary' }}">
                            {{ $user->is_admin ? 'Admin' : 'Member' }}</td>
                        <td>{{ $user->created_at->diffForHumans() }}</td>
                        <td>{{ $user->updated_at->diffForHumans() }}</td>
                        <td class="text-center">
                            <svg wire:click='deleteUser({{ $user->id }})' xmlns="http://www.w3.org/2000/svg"
                                width="15" height="15" fill="currentColor" class="bi bi-trash3 "
                                viewBox="0 0 16 16" data-darkreader-inline-fill="" style="color: red; cursor:pointer">
                                <path
                                    d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z">
                                </path>
                            </svg>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class=" row d-flex text-right justify-content-between ">
            {!! $users->links('includes.pagination-links') !!}
        </div>
    @else
        <tbody>
            <tr>
                <td colspan="4" class="text-center">Whoops! No users found.</td>
            </tr>
        </tbody>
    @endif
</div>
