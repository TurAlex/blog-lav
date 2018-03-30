<?php

namespace App\Http\Controllers;
use App\Mail\MailToAdmin;
use App\Mail\MailToUser;
use App\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendmailsController extends Controller
{
    public function contactMail(Request $request){
	    //dd($request);
    	$this->validate($request, [
		    'name'	=>	'required',
	    	'email'	=>	'required|email',
		    'phone'	=>	'required|regex:/^(\+38)\([0-9]{3}\)\-[0-9]{3}\-[0-9]{2}\-[0-9]{2}$/',
		    'message'	=>	'required',
		    'g-recaptcha-response' => 'required',
	    ]);
	    $mail_data = SendMail::add($request->all());
	    $mail_data->generateToken();
	    Mail::to($mail_data->email)->send(new MailToUser($mail_data));
	    Mail::to('turalexpro@gmail.com')->send(new MailToAdmin($mail_data));
	    return redirect()->back()->with('status','Ваше сообщение успешно отправленно! Мы свяжемся с вами в ближайшее время!');
    }
	
}
