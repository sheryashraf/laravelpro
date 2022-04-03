<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\Enrollmet;
use App\Http\Requests\StoreEnrollmetRequest;
use App\Http\Requests\UpdateEnrollmetRequest;
use App\Models\Course;
class EnrollmetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // dd($course);
        // dd($request);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $courses = Course::get();
        return view('enrollmets.enroll', ['courses' => $courses]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEnrollmetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEnrollmetRequest $request)
    {

        // dd($request->id);

        Enrollmet::create(['user_id' => Auth::user()->id, 'course_id' => $request->id]);
        return back();

        // return view('enrollments.enroll', ["data" => $enrollment]);

        // $input = $request->all();
        // $input['user_id'] = auth()->user()->id;
        // Course::create($input);
        // return redirect('/courses')->with('message', 'Course Created Successfully');
        // return redirect('/enrollments/enroll');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enrollmet  $enrollmet
     * @return \Illuminate\Http\Response
     */
    public function show(Enrollmet $enrollmet)
    {
         return view('enrollmets.enroll', ["data" => $enrollmet]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enrollmet  $enrollmet
     * @return \Illuminate\Http\Response
     */
    public function edit(Enrollmet $enrollmet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEnrollmetRequest  $request
     * @param  \App\Models\Enrollmet  $enrollmet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEnrollmetRequest $request, Enrollmet $enrollmet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enrollmet  $enrollmet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enrollmet $enrollmet)
    {
        //
    }
    public function unenroll($id){
        Enrollmet::find($id)->delete();
        return back();
        // return back();
    }

}