<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Mail;

use App\Models\Contact;
use App\Models\Subscriber;
use App\Models\AllSiteForm;
use App\Models\EnrollStudent;

class SiteController extends Controller
{
    public function ContactPageForm(Request $request)
    {

        // dd("Data   =  ".$request."Name".$request->name);

		$to = "pny.ahsanmahmood@gmail.com";
        $subject = $request->subject;
        
        $message = "
        <html>
        <head>
        <title>HTML email</title>
        </head>
        <body>
        <p>Sender Name: $request->name</p>
        <p>Sender Email: $request->email</p>
        <h3>Message:</h3>
        $request->message
        </body>
        </html>
        ";
        
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        
        // More headers
        $headers .= 'From: <live@pnytrainings.com>' . "\r\n";
        Contact::create([
        	'name' => $request->name,
        	'email' => $request->email,
        	'subject' => $request->subject,
        	'phone_number' => $request->phone_number,
        	'message' => $request->message
        ]);
        // mail($to,$subject,$message,$headers);
		return response()->json(["status"=>true,"message"=>"Message Send"]);
    }

    public function Subscribe(Request $request)
    {
        Subscriber::create([            
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number
        ]);
        return response()->json(["status"=>true,"message"=>"Message Send"]);
    }

    public function allSiteFormsAction(Request $request)
    {
        // dd($request->toArray());
        if ($request->form_is == "subscribe_form") {
            Subscriber::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number
            ]);
            return response()->json(["status"=>true,"message"=>"Message Send"]);
        } else {
            AllSiteForm::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'city' => $request->city,
                'subject' => $request->subject,
                'message' => $request->message,
                'extra_field' => $request->extra_field,
                'form_is' => $request->form_is
            ]);
            return response()->json(["status"=>true,"message"=>"Added"]);
        }
        
    }

    public function ShowSiteForms()
    {
        $items = AllSiteForm::all();
        $enroll_students = EnrollStudent::count();
        return view("project.site-forms.index", compact(
            "items",
            'enroll_students'
        ));
    }

    public function ShowSubscribers()
    {
        $items = Subscriber::all();
        $enroll_students = EnrollStudent::count();
        return view("project.subscriber.index", compact(
            "items",
            'enroll_students'
        ));
    }

}
