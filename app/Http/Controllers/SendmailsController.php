<?php

namespace App\Http\Controllers;
use App\Mail\SendMails;
use App\SendMail;
use Illuminate\Http\Request;

class SendmailsController extends Controller
{
    public function contactMail(Request $request){
	    $this->validate($request, [
		    'name'	=>	'required',
	    	'email'	=>	'required|email',
		    'content'	=>	'required',
		    
	    ]);
	    $mail_data = SendMail::add($request->all());
	    $mail_data->generateToken();
	
	    \Mail::to($mail_data)->send(new SendMails($mail_data));
	
	    return redirect()->back()->with('status','Проверьте вашу почту!');
    }
}
