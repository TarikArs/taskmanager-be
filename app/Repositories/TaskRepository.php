<?php

namespace App\Repositories;

use App\Interfaces\TaskRepositoryInterface;
use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class TaskRepository implements TaskRepositoryInterface
{
    /**
     * Get all tasks for a specific owner.
     *
     * @param int $owner_id The ID of the task owner.
     * @return Collection|Task[] List of tasks belonging to the owner.
     */
    public function getAll($owner_id): Collection
    {
        return Task::where('owner_id', $owner_id)->get();
    }

    /**
     * Get a task by its ID.
     *
     * @param int $id The ID of the task.
     * @return Task|null The task with the given ID or null if not found.
     */
    public function getById($id): ?Task
    {
        return Task::find($id);
    }

    /**
     * Create a new task.
     *
     * @param array $input The input data for creating the task.
     * @return Task The created task.
     */
    public function create($input): Task
    {
        return Task::create($input);
    }

    /**
     * Update an existing task by ID.
     *
     * @param int $id The ID of the task to update.
     * @param array $input The updated data for the task.
     * @return bool Whether the task was successfully updated.
     * @throws ModelNotFoundException If the task with the given ID is not found.
     */
    public function update($id, $input): bool
    {
        $task = Task::find($id);
        if ($task) {
            return $task->update($input);
        }
        throw new ModelNotFoundException("Task not found");
    }

    /**
     * Delete a task by ID.
     *
     * @param int $id The ID of the task to delete.
     * @return bool Whether the task was successfully deleted.
     * @throws ModelNotFoundException If the task with the given ID is not found.
     */
    public function delete($id): bool
    {
        $task = Task::find($id);
        if ($task) {
            return $task->delete();
        }
        throw new ModelNotFoundException("Task not found");
    }
}
