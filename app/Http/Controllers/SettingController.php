<?php

namespace App\Http\Controllers;

use App\Models\setting;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateSettingRequest;

class SettingController extends Controller
{
    
    public function index()
    {
        $settings =setting::first();

        // setting::paginate(config('pagination.count'));
        return view('admin.settings.index',get_defined_vars());
    }

    public function update(setting $setting, UpdateSettingRequest $request)
    {
        $data = $request->validated();
        $setting->update($data);
        return redirect()->route('admin.settings.index')->with('status', 'Successfully updata setting');
    }
    
}
