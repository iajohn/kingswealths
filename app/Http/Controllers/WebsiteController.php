<?php

namespace App\Http\Controllers;

use Mail;
use Brian2694\Toastr\Facades\Toastr;
// use App\Rules\GoogleRecaptcha;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{

    /**
     * Display a listing of the resource of website application.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function contactPost(Request $request) {
        $this->validate($request, [
            'firstname'      =>  'required',
            'lastname'       =>  'required',
            'email'          =>  'required|email',
            'subject'        =>  'required',
            'content'        =>  'required',
            // 'g-recaptcha-response' => ['required', new GoogleRecaptcha],
            'g-recaptcha-response' => 'required|captcha',
        ]);

        Mail::send('pages.includes.emails.contact',[
            'firstname'         =>  $request->firstname,
            'lastname'          =>  $request->lastname,
            'email'             =>  $request->email,
            'subject'           =>  $request->subject,
            'content'           =>  $request->content,
        ], 

        function($mail) use ($request){
            $mail->from($request->email, $request->firstname .' '. $request->lastname);
            $mail->to('iamkingswealth@gmail.com')->subject($request['subject'] );
        });

        Toastr::success('Your Message was Sent Successfully, thank you for contacting with us, our team will get back to you soon!', 'Success');

        return redirect()->back();
        // ->with('flash_message', 'Sent Successfully, thank you for contacting with us, our team will get back to you soon!'); 
    }

}