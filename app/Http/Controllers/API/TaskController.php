<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\Base\BaseApiController;
use App\Http\Requests\Task\TaskStoreRequest;
use App\Http\Requests\Task\UpdateTaskRequest;
use App\Http\Resources\Task\TaskCollection;
use App\Http\Resources\Task\TaskResource;
use App\Models\Task;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class TaskController extends BaseApiController
{
    use \Illuminate\Foundation\Auth\Access\AuthorizesRequests ;

    public function index():JsonResponse
    {
       try{
            $tasks = Auth::user()->tasks()->latest()->paginate(10);
            return $this->success(new TaskCollection($tasks) , 'Task fetched successfully') ;
       }catch(\Throwable $e){
            return $this->error('Failed to fetch tasks', 500 , $e) ;
       } 
    }

    public function store(TaskStoreRequest $request):JsonResponse
    {
        try{
            $tasks = Auth::user()->tasks()->create($request->validated());
            return $this->success(new TaskResource($tasks),'Task created successfully',201) ;
        }catch(\Throwable $e){
            return $this->error('Failed to create task', 500, $e) ;
        }
    }

    public function show(Task $task):JsonResponse
    {
        try{
            $this->authorize('view',$task) ;
            return $this->success(new TaskResource($task), 'Task details retrived') ;
        }catch(\Throwable $e){
            return $this->error('Failed to retrive task' , 500 , $e) ;
        }
        
    }

    public function update(UpdateTaskRequest $request , Task $task):JsonResponse
    {
        try {
            $this->authorize('update',$task) ;
            $task->update($request->validated());
            return $this->success(new TaskResource($task), 'Task Updated Successfully') ;
        } catch (\Throwable $e){
            return $this->error('Failed to Update task' , 500 , $e) ;
        }
    }

    // soft delete
    public function destroy(Task $task):JsonResponse
    {
       try {
            $this->authorize('delete' , $task);
            $task->delete() ;
            return $this->success(null, 'Task soft-deleted');
       } catch (\Throwable $e){
            return $this->error('Failed to soft-delete the task' , 500 , $e->getMessage()) ;
       } 
    }

}
