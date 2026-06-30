<?php

namespace App\Http\Controllers;

use App\Models\message;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\StoreSubscriberRequest;

class FrontController extends Controller
{
    public function index()
    {      
        return view('front.index');
    }
    public function about()
    {
        return view('front.about');
    }
    public function service()
    {
        return view('front.service');
    }
    public function contact()
    {
        return view('front.contact');
    }
    public function store(StoreMessageRequest $request)
    {
        $message = $request->validated();
        message::create($message);

        return back()->with('status' , 'Your Message Sent Successfully');
    }
    public function subscriber(StoreSubscriberRequest $request)
    {
        $subscriber = $request->validated();
        Subscriber::create($subscriber);

        return back()->with('status', 'Your subscriber Sent Successfully');
    }
}
