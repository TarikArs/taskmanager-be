<?php

namespace App\Repositories;

use App\Interfaces\TaskRepositoryInterface;
use App\Models\Task;

class TaskRepository implements TaskRepositoryInterface
{

    public function getAll()
    {

        return Task::all();
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
        $task->fill($input);
        $task->save();
    }

    public function delete($id)
    {
        $task = Task::find($id);
        $task->delete();
    }
}
