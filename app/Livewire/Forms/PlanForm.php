<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Plan;
use Illuminate\Validation\Rule;
use App\Livewire\Plans\PlansIndex;

class PlanForm extends Form
{
    public ?Plan $plan;

    public string $name;
    public string $description;
    public float $price;

    public function setPlan(Plan $plan): void
    {
        $this->plan = $plan;

        $this->name = $plan->name;
        $this->price = $plan->price;
        $this->description = $plan->description;
    }

    public function store(): void
    {
        $validated = $this->validate([
            'name' => ['required', Rule::unique('plans')],
            'price' => ['required', 'numeric'],
            'description' => ['nullable', 'min:5', 'max:255'],
        ]);

        Plan::create($validated);
    }

    public function update(): void
    {
        $validated = $this->validate([
            'name' => ['required', Rule::unique('plans')->ignore($this->plan->id)],
            'price' => ['required', 'numeric'],
            'description' => ['nullable', 'min:5', 'max:255'],
        ]);

        $this->plan->update($validated);
    }
}
