<?php
use App\Models\Todo;
use function Livewire\Volt\{state};

state(['title']);

$save=function(){
    $validated=$this->validate([
        'title'=>'required'
    ]);
    Todo::create($validated);
    $this->reset('title');

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

