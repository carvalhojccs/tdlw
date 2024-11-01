<?php

namespace App\Observers;

use App\Models\Plan;
use Illuminate\Support\Str;

class PlanObserver
{
    /**
     * Handle the Plan "creating" event.
     */
    public function creating(Plan $plan): void
    {
        $plan->url = Str::kebab(Str::lower($plan->name));
    }

    /**
     * Handle the Plan "created" event.
     */
    public function created(Plan $plan): void
    {
        //
    }

    /**
     * Handle the Plan "updated" event.
     */
    public function updated(Plan $plan): void
    {
        //
    }

    /**
     * Handle the Plan "updating" event.
     */
    public function updating(Plan $plan): void
    {
        $plan->url = Str::kebab(Str::lower($plan->name));
    }

    /**
     * Handle the Plan "deleted" event.
     */
    public function deleted(Plan $plan): void
    {
        //
    }

    /**
     * Handle the Plan "restored" event.
     */
    public function restored(Plan $plan): void
    {
        //
    }

    /**
     * Handle the Plan "force deleted" event.
     */
    public function forceDeleted(Plan $plan): void
    {
        //
    }
}
