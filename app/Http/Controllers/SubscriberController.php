<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function index()
    {
        $subscribers = Subscriber::paginate(config('pagination.count'));
        return view('admin.subscribers.index', get_defined_vars());
    }
    public function destroy(Subscriber $subscriber)
    {
        $subscriber->delete();

        return redirect()
            ->route('admin.subscribers.index')
            ->with('status', 'Subscriber deleted successfully.');
    }

}
