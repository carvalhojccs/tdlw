<?php

namespace App\Livewire\Plans;

use App\Livewire\Forms\PlanForm;
use Livewire\Component;

class PlansCreate extends Component
{
    public PlanForm $form;

    public function save()
    {
        $this->form->store();

        session()->flash('plans-toast', 'Plan created sussessfullyt!');
        return redirect()->route('plans.index');
    }
    public function render()
    {
        return view('livewire.plans.plans-create');
    }
}
