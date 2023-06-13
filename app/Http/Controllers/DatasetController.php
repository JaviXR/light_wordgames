<?php

namespace App\Http\Controllers;

use App\Models\Dataset;
use App\Http\Requests\StoreDatasetRequest;
use App\Http\Requests\UpdateDatasetRequest;
use App\Models\Type;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class DatasetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datasets = auth()->user()->datasets()->with('type')->get();
        return Inertia::render('Dataset/Index', [
            'datasets' => $datasets
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Dataset/Create', [
            'types' => Type::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDatasetRequest $request)
    {
        Dataset::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'type_id' => $request->type_id,
            'content' => $request->content,
        ]);

        return redirect()->route('datasets.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dataset $dataset)
    {
        $dataset = Dataset::find($dataset);
        return Inertia::render('Dataset/Show', [
            'dataset' => $dataset
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dataset $dataset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDatasetRequest $request, Dataset $dataset)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dataset $dataset)
    {
        //
    }
}
