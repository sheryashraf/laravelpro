<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\CourseUser;

use App\Http\Requests\CourseValidationRequest;
class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $courses = Course::all();
        $user = auth()->user()->id;
        // dd($courses);

        return view('courses.index', ["data" => $courses, "user" => $user]);
    }

    public function availablecourse()
    {
 $input=auth()->user()->coursess->pluck('id')->all();

 $course=Course::whereNotIn('id',$input)->get();
        // $courses = Course::all();
        // $user = auth()->user()->id;
        // dd($courses);


        return view('courses.availablecourse', ["data" => $course ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = $request->all();
        $input['user_id'] = auth()->user()->id;
        Course::create($input);
        return redirect('/courses')->with('done', 'course made Done');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {

        return view('courses.show', ["data" => $course]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
        return view('courses.edit', ["data" => $course]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update( CourseValidationRequest $request, Course $course)
    {
        //
        // dd($course);
        $course->update($request->all());
        return redirect("/courses")->with('edit', 'Course Updated done');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
        $course->delete();
        return redirect('/courses')->with('delete', 'Course Deleted done');
    }
public function addusercourse($id)
{
    // $input=auth()->user()->id;
   
$input['user_id']=auth()->user()->id;


$input['course_id']=$id;
CourseUser::create($input);

return redirect("/availablecourse");
// dd($input);
}
public function courseenroll()
{
$inp=auth()->user()->coursess;
return view('courses.enrollment', ["data" => $inp]);

    dd($inp);
}

public function deletecourse($id)
{
    auth()->user()->coursess()->detach($id);
    return redirect('/enroll');

    // dd($id);
}
}
