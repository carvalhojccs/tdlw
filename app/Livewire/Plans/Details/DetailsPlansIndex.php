<?php

namespace App\Livewire\Plans\Details;

use App\Models\Plan;
use Livewire\Component;

class DetailsPlansIndex extends Component
{
    public ?Plan $plan;
    public function render()
    {
        return view('livewire.plans.details.details-plans-index',[
            'details' => $this->plan->details()->get(),
            'plan' => $this->plan,
        ]);
    }
}
