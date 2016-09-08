<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Task;

class Index extends Controller
{
    public function renderIndex() {
    	$tasks = Task::all();
    	return view('welcome', ['tasks' => $tasks]);
    }

    public function searchTasks() {
    	$search = Input::get('search');
    	
    	$tasks = Task::where('name', 'like', '%' . $search .'%')
    				->get();
    	
    	return view('welcome', ['tasks' => $tasks]);
    }
    
    public function createTask() {
    	$name = Input::get('name');
    	if ($name != NULL) {
    		
    		$task = new Task;
    		$task->user_id = 1;
    		$task->name = $name;
    		$task->save();
    		
    		return "задача успешно создана! <a href='/'>на главную</a>";
    	} else {
    		return 'не передано параметров name!';	
    	}
    }
    
    public function deleteTask($id) {
    	$task = Task::find($id);
    	
    	if ($task != NULL) {
    		$task->delete();
    		return "задача с id " . $id . " успешно удалена! <a href='/'>на главную</a>";
    	} else {
    		return "задача с таким id не найдена! <a href='/'>на главную</a>";
    	}
    }
}
