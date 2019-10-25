<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\EnrollStudent;

class EnrollStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $items = EnrollStudent::all();
        $enroll_students = EnrollStudent::count();
        return view('project.student-enroll.index', compact(
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
        // dd("ok");
        $enroll_students = EnrollStudent::count();
        return view('project.student-enroll.create', compact(
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
        EnrollStudent::create([
            'name' => $request->name,
            'email' => $request->email,
            'city' => $request->city,
            'address' => $request->address,
            'current_edu' => $request->current_edu,
            'phone_number' => $request->phone_number,
            'profession' => $request->profession,
            'reason' => $request->reason,
        ]);
        // mail($to,$subject,$message,$headers);
        return response()->json(["status"=>true,"message"=>"Enrolled"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = EnrollStudent::where('id', $id)->first();
        return view('project.student-enroll.single', compact('item'));        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = EnrollStudent::where('id', $id)->first();
        $enroll_students = EnrollStudent::count();
        return view('project.student-enroll.edit', compact(
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
        EnrollStudent::where('id',$id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'city' => $request->city,
            'address' => $request->address,
            'current_edu' => $request->current_edu,
            'phone_number' => $request->phone_number,
            'profession' => $request->profession,
            'reason' => $request->reason,
        ]);
        return redirect('admin/student-enroll')->with('updated','Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        EnrollStudent::where('id',$id)->delete();
        return redirect('/admin/student-enroll')->with('deleted',"Deleted Successfully!");
    }

    public function addStudent()
    {
        
        $enroll_students = EnrollStudent::count();
        return view('project.student-enroll.create', compact(
            'enroll_students'
        ));
    }

    public function addStudentAction(Request $request)
    {
        EnrollStudent::create([
            'name' => $request->name,
            'email' => $request->email,
            'city' => $request->city,
            'address' => $request->address,
            'current_edu' => $request->current_edu,
            'phone_number' => $request->phone_number,
            'profession' => $request->profession,
            'reason' => $request->reason,
        ]);
        // mail($to,$subject,$message,$headers);
        return redirect('/admin/student-enroll')->with("added", "Added Successfully!");
    }

}
