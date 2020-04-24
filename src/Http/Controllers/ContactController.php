<?php 

namespace Rk\Contact\Http\Controllers;

use Rk\Contact\Mail\ContactMail;
use Illuminate\Http\Request;
use Rk\Contact\Http\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller 
{
    /**
     * Default show the contact form
     *
     * @return void
     */
    public function index()
    {
        return view('contact::contact');
    }

    
    /**
     * Store and send email
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {

        Mail::to(config('contact.send_email_to'))->send(new ContactMail($request->subject, $request->message));

        Contact::create($request->all());
        
        return redirect()->back();
    }
    
}


?>