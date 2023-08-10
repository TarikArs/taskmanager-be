<?php

namespace App\Repositories;

use App\Interfaces\TaskRepositoryInterface;
use App\Models\Task;

class TaskRepository implements TaskRepositoryInterface
{

    public function getAll($owner_id)
    {

        return Task::where('owner_id', $owner_id)->get();
    }

    public function getById($id)
    {
        return Task::find($id);
    }

    public function create($input)
    {
        return Task::create($input);
    }

    public function update($id, $input)
    {
        $task = Task::find($id);
        if ($task)
            return $task->update($input);
        throw new \Exception("Task not found");
    }

    public function delete($id)
    {
        $task = Task::find($id);
        if ($task)
           return $task->delete();
        throw new \Exception("Task not found");
    }
}
