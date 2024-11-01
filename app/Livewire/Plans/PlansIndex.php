<?php

namespace App\Livewire\Plans;

use App\Models\Plan;
use Livewire\Attributes\Title;
use Livewire\Component;

class PlansIndex extends Component
{
    #[Title('Plans')]
    public function render()
    {
        return view('livewire.plans.plans-index', [
            'plans' => Plan::all(),
        ]);
    }
}
