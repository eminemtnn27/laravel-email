<?php

namespace App\Http\Controllers;
use App\Models\email;
	
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function email(){
        $email=email::all();

        $created_by=Auth()->User()->name;

        return view('email.register-email' ,compact('email'));
    }
    public function notification(){
        $notifications=notifications::all();
        return $notifications;
    }
  /*  public function mail(Request $request){
        
        $data = [
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'mesaj'=>$request->get('mesaj')
        ];
        mail::send('email.register-email', $data, function ($msg) {
            $msg->from('info@example.com');
            $msg->subject("test maili");
            $msg->to("eminemetin9@gmail.com");
        });
    }*/
}
