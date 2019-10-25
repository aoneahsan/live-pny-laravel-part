<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\StudentFeedback;
use App\Models\EnrollStudent;

class StudentFeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getallstudentfeedbacks()
    {
        $items = StudentFeedback::all();
        return response()->json(['data' => $items]);
    }
    
    public function index()
    {
        $items = StudentFeedback::all();
        $enroll_students = EnrollStudent::count();
        return view('project.student-feedbacks.index', compact(
            'items',
            'enroll_students'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $enroll_students = EnrollStudent::count();
        return view('project.student-feedbacks.create', compact(
            'enroll_students'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->toArray());
        StudentFeedback::create([
            'name' => $request->name,
            'description' => $request->description,
            'total_amount' => $request->total_amount,
            'url' => $request->url,
            'extra_field' => $request->extra_field,
        ]);
        return redirect('admin/student-feedbacks')->with('added','Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = StudentFeedback::where('id', $id)->first();
        $enroll_students = EnrollStudent::count();
        return view('project.student-feedbacks.single', compact(
            'item',
            'enroll_students'
        ));        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = StudentFeedback::where('id', $id)->first();
        $enroll_students = EnrollStudent::count();
        return view('project.student-feedbacks.edit', compact(
            'item',
            'enroll_students'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->toArray());
        StudentFeedback::where('id',$id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'url' => $request->url,
            'extra_field' => $request->extra_field,
        ]);
        return redirect('admin/student-feedbacks')->with('updated','Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        StudentFeedback::where('id',$id)->delete();
        return redirect('/admin/student-feedbacks')->with('deleted',"Deleted Successfully!");
    }
}