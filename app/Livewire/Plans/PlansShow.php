<?php

namespace App\Livewire\Plans;

use App\Models\Plan;
use Livewire\Component;

class PlansShow extends Component
{
    public Plan $plan;
    public function render()
    {
        return view('livewire.plans.plans-show');
    }
}
