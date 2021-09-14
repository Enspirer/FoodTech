<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Contact\SendContactRequest;
use App\Mail\Frontend\Contact\SendContact;
use App\Mail\Frontend\Contact\SendUserContact;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;
use Illuminate\Http\Request;

/**
 * Class ContactController.
 */
class ContactController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.contact');
    }

    /**
     * @param SendContactRequest $request
     *
     * @return mixed
     */
    public function send(Request $request)
    {

        // $contact = new Contact;

        // $contact->first_name=$request->first_name;
        // $contact->last_name=$request->last_name;
        // $contact->email=$request->email;
        // $contact->message=$request->message;
        // $contact->status='Pending';

        // $contact->save();

        
        Mail::send(new SendContact($request));

        Mail::send(new SendUserContact($request));

        return back()->withFlashSuccess(__('alerts.frontend.contact.sent'));

    }
}
