<?php

namespace App\Interfaces;

interface TaskRepositoryInterface
{
    /**
     * Get all tasks.
     *
     * @return mixed
     */
    public function getAll($owner_id);

    /**
     * Get a task by ID.
     *
     * @param int $id
     * @return mixed
     */
    public function getById($id);

    /**
     * Create a new task.
     *
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes);

    /**
     * Update a task.
     *
     * @param int $id
     * @param array $attributes
     * @return mixed
     */
    public function update($id, array $attributes);

    /**
     * Delete a task.
     *
     * @param int $id
     * @return mixed
     */
    public function delete($id);
}
