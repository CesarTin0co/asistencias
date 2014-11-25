<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
        GLOBAL $CFG, $USER, $DB;
        require_login();
        $courses = enrol_get_users_courses($USER->id);
		return View::make('hello', compact('USER','courses'));
	}

    public function showCourse($id){
        GLOBAL $CFG, $USER, $DB;
        require_login();
        $course = $DB->get_record('course', array('id' => $id));
        $coursecontext = context_course::instance($course->id);
        $users = get_enrolled_users($coursecontext);
        return View::make('course',compact('USER','course','users'));
    }

}
