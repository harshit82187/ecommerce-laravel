<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Models\Contact;
use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;


class HomeController extends Controller
{
    public function subscriber(Request $req){
        // dd($req->all());
        try{
            $req->validate([
                'email' => 'required|email|unique:subscribers,email',
            ]);

            Subscriber::create(['email' => $req->email]);
            return back()->with('success','Subscriber Register Successfully!');    

        }catch(ValidationException $e) {
            return back()->withErrors($e->validator)->withInput();
        }catch(\Exception $e){
            return back()->with('error', 'Warning : ' .$e->getMessage());
        }       
    }

    public function contact(Request $req){

        try{

            if($req->isMethod('get')){
                
                return view('front.contact');
            }else{

                // dd($req->all());

                $req->validate([
                    'name' => 'required|string',
                    'email' => 'required|email',
                    'message' => 'required|string'
                ]);

                $data = [
                    'name' => $req->name,
                    'email' => $req->email,
                    'message' => $req->message,
                ];

                Contact::create($data);

                $subject = 'Subscribe Mail';
			    $email = $req->email;

            try {
                Mail::send('mail.contact', ['data' => $data], function($message) use ($subject, $email) {
                    $message->to($email);
                    $message->subject($subject);
                });
    
                \Log::info('Success to send email to ' . $email);
    
                return redirect()->back()->with('success', 'Your query sent successfully');
            } catch (\Exception $mailException) {
                \Log::error('Failed to send email to ' . $email . '. Error: ' . $mailException->getMessage());
                return back()->with('error', 'Warning : ' .$mailException->getMessage());
            }
                return back()->with('success','We Will Touch You Soon!');
            }

        }catch(ValidationException $e) {
            return back()->withErrors($e->validator)->withInput();
        }catch(\Exception $e){
            return back()->with('error', 'Warning : ' .$e->getMessage());
        }       
    }
   




}
