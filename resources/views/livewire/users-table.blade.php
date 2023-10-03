<div class="container">
    <div class="row d-flex justify-content-between pb-4">
        <div class="mx-1 col-3">
            <input type="text" wire:model.debounce.300ms='search'
                class="rounded appearance-none block w-full bg-gray-200 text-gray-200 py-3 px-4 leading-tight focus:outline-none">
        </div>
        <div class=" col relative mx-1">
            <select name="" id="" wire.model='orderBy'
                class="rounded appearance-none block w-full bg-gray-200 text-gray-200 py-3 px-4 leading-tight focus:outline-none">
                <option value="id">ID</option>
                <option value="name">Name</option>
                <option value="email">Email</option>
                <option value="created_at">Sign up date</option>
            </select>
        </div>
        <div class=" col relative mx-1">
            <select name="" id="" wire:model='orderAsc'
                class="rounded appearance-none block w-full bg-gray-200 text-gray-200 py-3 px-4 leading-tight focus:outline-none">
                <option value="1">Ascending</option>
                <option value="0">Descending</option>
            </select>
        </div>
        <div class=" col relative mx-1">
            <select name="" id="" wire:model='perPage'
                class="rounded appearance-none block w-full bg-gray-200 text-gray-200 py-3 px-4 leading-tight focus:outline-none">
                <option>10</option>
                <option>25</option>
                <option>50</option>
                <option>75</option>
            </select>
        </div>
    </div>
    <table class="table-auto w-full mb-6">
        <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Created</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td class="px-4 py-2">{{ $user->id }}</td>
                    <td class="px-4 py-2">{{ $user->name }}</td>
                    <td class="px-4 py-2">{{ $user->email }}</td>
                    <td class="px-4 py-2">{{ $user->created_at->diffForHumans() }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
    {!! $users->links() !!}
</div>
