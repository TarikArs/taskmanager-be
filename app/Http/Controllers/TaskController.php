<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Interfaces\TaskRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TaskController extends Controller
{
    protected $taskRepository;

    public function __construct(TaskRepositoryInterface $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    protected function handleException(\Exception $e): JsonResponse
    {
        return response()->json(['message' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
    }

    public function index(): JsonResponse
    {
        try {
            $owner_id = auth()->user()->id;
            $tasks = $this->taskRepository->getAll($owner_id);
            return response()->json($tasks, Response::HTTP_OK);
        } catch (\Exception $e) {
            return $this->handleException($e);
        }
    }

    public function store(TaskRequest $request): JsonResponse
    {
        try {
            $request->merge(['owner_id' => auth()->user()->id]);
            $task = $this->taskRepository->create($request->all());
            return response()->json($task, Response::HTTP_CREATED);
        } catch (\Exception $e) {
            return $this->handleException($e);
        }
    }

    public function update(Request $request, $id): JsonResponse
    {
        try {
            $task = $this->taskRepository->update($id, $request->all());
            return response()->json($task, Response::HTTP_OK);
        } catch (\Exception $e) {
            return $this->handleException($e);
        }
    }

    public function destroy($id): JsonResponse
    {
        try {
            $this->taskRepository->delete($id);
            return response()->json(['message' => 'Task deleted successfully'], Response::HTTP_OK);
        } catch (\Exception $e) {
            return $this->handleException($e);
        }
    }
}
