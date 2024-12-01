<?php

namespace App\Livewire\Plans;

use App\Models\Plan;
use Livewire\Component;

class PlansShow extends Component
{
    public Plan $plan;

    public function delete(Plan $plan)
    {
        $plan->delete();
        session()->flash('plans-toast', 'Plan deleted sussessfully!');
        return redirect()->route('plans.index');
    }
    public function render()
    {
        return view('livewire.plans.plans-show');
    }
}
