<?php
use App\Models\Todo;
use function Livewire\Volt\{state,mount,on};

state(['todos']);

mount(function(){
    $this->todos=Todo::all();

});


$refreshAllTodos=function(){
    $this->todos=Todo::all();
};


on(['refresh-todos'=>function(){
    $this->refreshAllTodos();
}]);


$completed=function($id){
    $todo=Todo::find($id);
    $todo->update([
        'completed'=>!$todo->completed
    ]);

};

$delete=function($id){
    Todo::find($id)->delete();
    $this->refreshAllTodos();
};

?>

<div>
    <h1>Todos</h1>
   @foreach($todos as $todo)
   <div class="grid">
    <p>{{$todo->title}}</p>
    <input type="checkbox" {{$todo->completed == 1 ? 'checked' : ''}} wire:click="completed({{$todo->id}})">

        <svg xmlns="http://www.w3.org/2000/svg" wire:click='delete({{$todo->id}})' width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
          </svg>

   </div>
   @endforeach
</div>

