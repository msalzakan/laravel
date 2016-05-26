<?php

namespace App\Http\Controllers;

use App\Student as Student;
use App\Task as Task;

use Illuminate\Http\Request;

use App\Http\Requests;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
		
        $students = Student::all();
	
		foreach($students as $stu){
			echo $stu->name.":<br/>";
			$tasks = $stu->tasks;
			echo "<ul>";
				foreach($tasks as $task){
					echo "<li>".$task->name."</li>";
				}
			echo "</ul>";
			
		}
		?>
		<form method='post' action=''>
			<?= csrf_field() ?>
			<input type='text' name='sname' value='' />
			<input type='submit' />
		</form>
		<?php
		
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
		$tasks = Task::all();
        return View('mypage',array('tasks' => $tasks));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        echo "store";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        echo $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
