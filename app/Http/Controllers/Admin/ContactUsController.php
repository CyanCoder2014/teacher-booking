<?php

namespace App\Http\Controllers\Admin;

use App\ContactUs;
use App\Http\Controllers\Controller;
use App\Notifications\contactU;
use Freshbitsweb\Laratables\Laratables;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.contactus.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function show(ContactUs $contactUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactUs $contactUs)
    {
        return view('admin.contactus.reply',compact('contactUs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactUs $contactUs)
    {
        $this->validate($request,[
            'subject'=> 'required',
            'message'=> 'required',
        ]);
        $contactUs->notify(new contactU($request->subject,$request->message));
        $contactUs->status = 1;
        $contactUs->save();
        return redirect(route('contactus.index'))->with('message','Your Reply sended');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactUs $contactUs)
    {
        $contactUs->delete();
        return redirect(route('contactus.index'))->with('message','Contactus Deleted');

    }
    public function getdata()
    {
        return Laratables::recordsOf(ContactUs::class);
    }
}
