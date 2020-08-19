<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreatePost extends Component
{
    public $newTask = '';
    public $tasks = [];

    public function store()
    {
        if (is_null($this->newTask) || empty($this->newTask)) {
            return;
        }

        $this->tasks[] = $this->newTask;
        $this->emit('TaskCreated');

        $this->newTask = '';
    }

    public function render()
    {
        return view('livewire.posts.create');
    }
}
