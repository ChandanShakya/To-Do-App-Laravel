<?php

namespace App\Http\Livewire\Todo;

use App\Models\TodoItem;
use Livewire\Component;

class Form extends Component
{
    public $description;

    protected $rules = [
        'description' => 'required|min:6'
    ];

    public function render()
    {
        return view('livewire.todo.form');
    }

    public function createItem()
    {
        $this->validate();

        $item = new TodoItem();
        $item->description = $this->description;
        $item->save();

        $this->emit('saved');
    }
}