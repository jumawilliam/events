<?php
use App\Models\Todo;
use function Livewire\Volt\{state,updated};

state(['title']);

$save=function(){
    $validated=$this->validate([
        'title'=>'required'
    ]);
    Todo::create($validated);
    $this->reset('title');

    $this->dispatch('refresh-todos');
    $this->dispatch('show-alert',message:'Todo created successfully');

};



?>

<div>
    <form wire:submit="save">
        <fieldset role="group">
          <input
            wire:model="title"
            type="text"
            placeholder="Enter New Todo"
            autocomplete="email"
          />
          <input   type="submit" value="Add Todo" />
        </fieldset>
      </form>

</div>

