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

    public $orderBy = 'id';

    public $orderAsc = true;

    public $selected = [];

    protected $listeners = ['deleteUsers'];

    public function createUser()
    {
        $this->emit('createUser');

        session()->flash('message', 'User successfully created.');

        $this->reset();
    }

    public function deleteUser()
    {
        User::destroy($this->selected); // delete selected users

        $this->selected = []; // deselect all

        session()->flash('message', 'Users successfully deleted.');
    }
    public function render()
    {
        return view('livewire.users-table', [
            'users' => User::search($this->search)
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->paginate($this->perPage),
        ]);
    }
}
