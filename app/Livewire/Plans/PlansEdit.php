<?php

namespace App\Livewire\Plans;

use App\Models\Plan;
use Livewire\Component;
use App\Livewire\Forms\PlanForm;

class PlansEdit extends Component
{
    public PlanForm $form;

    public function mount(Plan $plan)
    {
        $this->form->setPlan($plan);
    }

    public function save()
    {
        $this->form->update();
        session()->flash('plans-toast', 'Plan updated successfully!');
        return redirect()->route('plans.index');
    }
    public function render()
    {
        return view('livewire.plans.plans-edit');
    }
}
