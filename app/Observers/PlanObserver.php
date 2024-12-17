<?php

namespace App\Observers;

use App\Jobs\RegisterAudit;
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
        RegisterAudit::dispatch([
            'user_id' => auth()->id(),
            'when' => now(),
            'event' => 'created',
            'ip' => request()->ip(),
            'auditable_id' => $plan->id,
            'auditable_type' => Plan::class,
        ]);
    }

    /**
     * Handle the Plan "updated" event.
     */
    public function updated(Plan $plan): void
    {
        $old = [];

        foreach ($plan->getDirty() as $dirtyKey => $dirtyValue) {
            $old[$dirtyKey] = $plan->getOriginal($dirtyKey);
        }

        RegisterAudit::dispatch([
            'user_id' => auth()->id(),
            'when' => now(),
            'event' => 'updated',
            'ip' => request()->ip(),
            'auditable_id' => $plan->id,
            'auditable_type' => Plan::class,
            'details' => [
                'old' => $old,
                'new' => $plan->getDirty(),
            ]
        ]);
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
