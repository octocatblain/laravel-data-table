<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

class UsersTable extends Component
{
    use WithPagination;

    #[Url(history: true)]
    public $perPage = 10;

    #[Url(as: 's', history: true, keep: true)]
    public $search = '';

    #[Url(history: true)]
    public $role = '';

    #[Url(history: true)]
    public $orderBy = 'id';

    #[Url(history: true)]
    public $orderAsc = true;

    #[Url(history: true)]
    public $selected = [];

    protected $listeners = ['deleteUsers', 'deleteUser'];

    // column sorting for all fields
    /**
     * Summary of setSortBy
     * @param mixed $orderByField
     * @return void
     */
    public function setSortBy($orderByField)
    {
        if ($this->orderBy === $orderByField) {
            $this->orderAsc = ($this->orderAsc == false) ? true : false;
            return;
        }

        $this->orderBy = $orderByField;
        $this->orderAsc = true;
    }

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
