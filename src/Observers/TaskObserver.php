<?php

namespace Studio\Novacron\Observers;

use Studio\Totem\Task;
use Studio\Totem\Totem;

class TaskObserver
{
    /**
     * Handle the Task "created" event.
     *
     * @param  Task  $task
     * @return void
     */
    public function created(Task $task)
    {
        $frequencies = Totem::frequencies();
        $request = request();
        $matched_frequency = collect($frequencies)->first(fn($f) => $f['interval'] == $request['frequencies']);
        if ($matched_frequency) {
            $interval = $matched_frequency['interval'];
            $request['frequencies'] = [[
                'task_id' => $task->id,
                'label' => "$task->description - $interval",
                'interval' => $interval
            ]];
        }
    }

    /**
     * Handle the Task "updated" event.
     *
     * @param  Task  $task
     * @return void
     */
    public function updated(Task $task)
    {
        $this->created($task);
    }

    /**
     * Handle the Task "deleted" event.
     *
     * @param  Task  $task
     * @return void
     */
    public function deleted(Task $task)
    {
        //
    }

    /**
     * Handle the Task "restored" event.
     *
     * @param  Task  $task
     * @return void
     */
    public function restored(Task $task)
    {
        //
    }

    /**
     * Handle the Task "force deleted" event.
     *
     * @param  Task  $task
     * @return void
     */
    public function forceDeleted(Task $task)
    {
        //
    }
}
