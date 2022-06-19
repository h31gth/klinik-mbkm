<?php 

namespace App\Http\Controllers; 

 
use Illuminate\Http\Request; 
use App\Models\Contact; 
use Mail; 
class ContactController extends Controller 

{ 
    public function contactForm() 
    { 
        return view('landingpage.contact.index'); 
    } 
    public function storeContactForm(Request $request) 
    { 
        $request->validate([ 
            'name' => 'required', 
            'email' => 'required|email', 
            'phone' => 'required|digits_between:10,12|numeric', 
            'subject' => 'required', 
            'message' => 'required', 
        ]); 

        $input = $request->all(); 

        Contact::create($input); 
        //  Send mail to admin 
        \Mail::send('adminpage.contact.index', array( 
            'name' => $input['name'], 
            'email' => $input['email'], 
            'phone' => $input['phone'], 
            'subject' => $input['subject'], 
            'message' => $input['message'], 
        ), function($message) use ($request){ 

            $message->from($request->email); 
            $message->to('admin@gmail.com', 'Admin')->subject($request->get('subject')); 

        }); 


        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']); 

    } 

} 