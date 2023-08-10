<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Interfaces\TaskRepositoryInterface;

class TaskController extends Controller
{

    protected $taskRepository;

    public function __construct(TaskRepositoryInterface $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    public function index()
    {
        try {
            $tasks = $this->taskRepository->getAll();
            return response()->json($tasks, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function store(TaskRequest $request)
    {
        try {
            return response()->json($request->all(), 200);
            $task = $this->taskRepository->create($request->all());
            return response()->json($task, 201);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function update(TaskRequest $request, $id)
    {
        try {
            $task = $this->taskRepository->update($request->all(), $id);
            return response()->json($task, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $this->taskRepository->delete($id);
            return response()->json(['message' => 'Task deleted successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
