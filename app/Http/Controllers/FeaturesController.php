<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFeaturesRequest;
use App\Http\Requests\UpdateFeatureRequest;

class FeaturesController extends Controller
{
    public function index()
    {
        $features = Feature::paginate(config('pagination.count'));
        return view('admin.Features.index',get_defined_vars());
    }
    public function create()
    {
        return view('admin.Features.create');
    }
    public function store(StoreFeaturesRequest $request)
    {
        $feature = $request->validated();
        Feature::create($feature);

        return redirect()->route('admin.features.index')->with('status', 'Successfully Add Service');
    }

    public function show(Feature $feature)
    {
        return view('admin.features.show',get_defined_vars());
    }
    public function edit(Feature $feature)
    {
        return view('admin.Features.edit', get_defined_vars());
    }
    public function update(Feature $feature , UpdateFeatureRequest $request)
    {
        $data = $request->validated();
        $feature->update($data);
        return redirect()->route('admin.features.index')->with('status', 'Successfully updatad Feature');
    }
    public function destroy(Feature $Feature)
    {
        $Feature->delete();

        return redirect()
            ->route('admin.features.index')
            ->with('status', 'Feature deleted successfully.');
    }
}
