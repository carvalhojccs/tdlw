<?php

namespace App\Jobs;

use App\Models\Audit\Audit;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class RegisterAudit implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(protected $data)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Audit::create($this->data);
    }
}
