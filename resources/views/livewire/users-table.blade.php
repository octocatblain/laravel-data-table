<div>
    <div class=" d-flex justify-content-between pb -10">
        <div>
            <input type="text" class="rounded appearance-none block leading-tight focus:ouyline-none">
        </div>
        <div class="rounded appearance-none block leading-tight focus:ouyline-none">
            <select name="" id="">
                <option value="">ID</option>
                <option value="">Name</option>
                <option value="">Email</option>
                <option value="">Sign up date</option>
            </select>
        </div>
        <div class="rounded appearance-none block leading-tight focus:ouyline-none">
            <select name="" id="">
                <option>Ascending</option>
                <option>Descending</option>
            </select>
        </div>
        <div class="rounded appearance-none block leading-tight focus:ouyline-none">
            <select name="" id="" wire:model="perPage">
                <option>10</option>
                <option>25</option>
                <option>50</option>
                <option>75</option>
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
