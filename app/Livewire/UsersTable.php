<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class UsersTable extends Component
{
    use WithPagination;

    public $perPage = 10;

    public $search = '';

    public $role = '';

    public $orderBy = 'id';

    public $orderAsc = true;

    public $selected = [];

    protected $listeners = ['deleteUsers'];

    public function deleteUser(User $user)
    {
        $user->delete(); // delete user

        session()->flash('message', 'User successfully deleted.');
    }

    public function deleteUsers()
    {
        User::destroy($this->selected); // delete selected users

        $this->selected = []; // deselect all

        session()->flash('message', 'Users successfully deleted.');
    }

    public function updated($field)
    {
    }

    public function render()
    {
        $total = User::count();

        return view('livewire.users-table', [
            'users' => User::search($this->search)
                ->when($this->role !== 'all', function ($query) {
                    $query->where('is_admin', $this->role);
                })
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->paginate($this->perPage),
            'total' => $total,
        ]);
    }
}
