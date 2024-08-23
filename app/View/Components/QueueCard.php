<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class QueueCard extends Component
{
    public function __construct(
        public readonly string $title,
        public readonly string $queue
    ) {
    }

    public function render(): View
    {
        $jobQuery = \DB::table('jobs')->where('queue', $this->queue);

        $failedCount = \DB::table('failed_jobs')->where('queue', $this->queue)->count();
        $awaitingCount = $jobQuery->clone()->whereNull('reserved_at')->count();
        $runningCount = $jobQuery->clone()->whereNotNull('reserved_at')->count();

        return view('components.queue-card', compact('failedCount', 'awaitingCount', 'runningCount'));
    }
}
