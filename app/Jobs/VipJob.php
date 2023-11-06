<?php

namespace App\Jobs;

use App\Models\Group;
use Date;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class VipJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected Group $group;
    /**
     * Create a new job instance.
     */
    public function __construct($group)
    {
        $this->group = $group;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // $group = Group::where('id', $this->group->id)->first();
        if ($this->group->vip ===1) {
            $this->group->update(['vip' =>0 ]);
        }
    }
}
