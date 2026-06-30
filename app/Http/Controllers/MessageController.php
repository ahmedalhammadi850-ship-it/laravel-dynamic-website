<?php

namespace App\Http\Controllers;

use App\Models\message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    
    public function index()
    {
        $messages = message::paginate(config('pagination.count'));
        return view('admin.messages.index',get_defined_vars());
    }

    public function show(message $message)
    {
        return view('admin.messages.show',get_defined_vars());
    }
    public function edit(message $message)
    {
        return view('admin.messages.edit', get_defined_vars());
    }
    public function destroy(message $message)
    {
        $message->delete();

        return redirect()
            ->route('admin.messages.index')
            ->with('status', 'message deleted successfully.');
    }
}
