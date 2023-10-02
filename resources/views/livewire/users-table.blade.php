<div>
    <div class="w-full flex pb -10">
        <div>
            <input type="text" class="rounded appearance-none block leading-tight focus:ouyline-none">
        </div>
        <div>
            <select name="" id="">
                <option value="">ID</option>
                <option value="">Name</option>
                <option value="">Email</option>
                <option value="">Sign up date</option>
            </select>
        </div>
        <div>
            <select name="" id="">
                <option value="">Ascending</option>
                <option value="">Descending</option>
            </select>
        </div>
        <div>
            <select name="" id="" wire:model='perPage'>
                <option value="">10</option>
                <option value="">25</option>
                <option value="">50</option>
                <option value="">100</option>
            </select>
        </div>
    </div>
    <table class="table-responsive">
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
    {!! $users->links() !!}
</div>
