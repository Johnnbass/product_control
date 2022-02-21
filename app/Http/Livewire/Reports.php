<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Reports extends Component
{
    public string $param;

    public function render()
    {
        return view("livewire.reports.{$this->param}");
    }
}
