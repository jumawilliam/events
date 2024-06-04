<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
class Alert extends Component
{
    public $success=false;
    public $success_message;

    #[On('show-alert')]
    public function showAlertMessage($message){
        $this->success = true;
        $this->success_message = $message;
    }
    public function render()
    {
        return view('livewire.alert');
    }
}
