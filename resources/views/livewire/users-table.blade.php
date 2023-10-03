<div class="container">
    <div class="row justify-content-between pb-4">
        <div class="col-3">
            <input type="text" wire:model.debounce.300ms="search"
                class="form-control rounded bg-gray-200 text-gray-200 py-2 px-4 leading-tight focus:outline-none">
        </div>
        <div class="col-3">
            <select name="" id="" wire:model="orderBy"
                class="form-control rounded bg-gray-200 text-gray-200 py-2 px-4 leading-tight focus:outline-none">
                <option value="id">ID</option>
                <option value="name">Name</option>
                <option value="email">Email</option>
                <option value="created_at">Sign up date</option>
            </select>
        </div>
        <div class="col-3">
            <select name="" id="" wire:model="orderAsc"
                class="form-control rounded bg-gray-200 text-gray-200 py-2 px-4 leading-tight focus:outline-none">
                <option value="1">Ascending</option>
                <option value="0">Descending</option>
            </select>
        </div>
        <div class="col-3">
            <select name="" id="" wire:model="perPage"
                class="form-control rounded bg-gray-200 text-gray-200 py-2 px-4 leading-tight focus:outline-none">
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
    </table>
    <div class=" row d-flex justify-content-between">
        {!! $users->links() !!}
    </div>
</div>
