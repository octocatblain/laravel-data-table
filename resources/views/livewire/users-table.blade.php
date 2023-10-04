<div class="container">
    <div class="row justify-content-between pb-4">
        <div class="col-3">
            <input type="text" id="search" name="search" wire:model.debounce.300ms="search"
                class="form-control rounded bg-gray-200 text-gray-200 py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                placeholder="Search users...">
        </div>
        <div class="col-3">
            <select name="order_by" id="order_by" wire:model="orderBy"
                class="form-control rounded bg-gray-200 text-gray-200 py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                <option value="id">ID</option>
                <option value="name">Name</option>
                <option value="email">Email</option>
                <option value="created_at">Sign up date</option>
            </select>

        </div>
        <div class="col-3">
            <select name="sort_by" id="sort_by" wire:model="orderAsc"
                class="form-control rounded bg-gray-200 text-gray-200 py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                <option value="1">Ascending</option>
                <option value="0">Descending</option>
            </select>
        </div>
        <div class="col-3">
            <select name="pagination" id="pagination" wire:model="perPage"
                class="form-control rounded bg-gray-200 text-gray-200 py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                <option>10</option>
                <option>25</option>
                <option>50</option>
                <option>75</option>
            </select>
        </div>
    </div>
    <table class="table table-responsive">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created</th>
            </tr>
        </thead>
        @if ($users->count() > 0)
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->diffForHumans() }}</td>
                    </tr>
                @endforeach
            </tbody>
        @else
            <tbody>
                <tr>
                    <td colspan="4" class="text-center">Whoops! No users found.</td>
                </tr>
            </tbody>
        @endif

    </table>
    <div class=" row d-flex text-right justify-content-between">
        {!! $users->links('includes.pagination-links') !!}
    </div>
</div>
