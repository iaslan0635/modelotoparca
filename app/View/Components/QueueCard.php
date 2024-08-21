<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class QueueCard extends Component
{
    public function __construct(
        public readonly string $title,
        public readonly string $queue
    )
    {
    }

    public function render(): View
    {
        $jobQuery = \DB::table("jobs")->where("queue", $this->queue);
        $get = fn(int $attempts, bool $running) => $jobQuery->clone()
            ->where("attempts", $attempts)
            ->when($running,
                fn($q) => $q->whereNotNull("reserved_at"),
                fn($q) => $q->whereNull("reserved_at")
            )->count();

        $failedCount = \DB::table("failed_jobs")->where("queue", "default")->count();
        $awaitingCount = $get(0, false);
        $runningCount = $get(1, true);

        return view('components.queue-card', compact('failedCount', 'awaitingCount', 'runningCount'));
    }
}
