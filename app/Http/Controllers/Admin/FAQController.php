<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\FAQ;
use App\Models\EnrollStudent;

class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getAllFAQs()
    {
        $items = FAQ::all();
        $enroll_students = EnrollStudent::count();
        return response()->json([
            'data' => $items
            ]);
    }
    
    public function index()
    {
        $items = FAQ::all();
        $enroll_students = EnrollStudent::count();
        return view('project.faq.index', compact(
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
        return view('project.faq.create', compact(
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
        FAQ::create([
            'question' => $request->question,
            'answer' => $request->answer,
            'order_number' => $request->order_number,
            'extra_field' => $request->extra_field,
        ]);
        return redirect('admin/faq')->with('added','Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $enroll_students = EnrollStudent::count();
        $item = FAQ::where('id', $id)->first();
        return view('project.faq.single', compact(
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
        $enroll_students = EnrollStudent::count();
        $item = FAQ::where('id', $id)->first();
        return view('project.faq.edit', compact(
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
        FAQ::where('id',$id)->update([
            'question' => $request->question,
            'answer' => $request->answer,
            'order_number' => $request->order_number,
            'extra_field' => $request->extra_field,
        ]);
        return redirect('admin/faq')->with('updated','Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FAQ::where('id',$id)->delete();
        return redirect('/admin/faq')->with('deleted',"Deleted Successfully!");
    }
}
