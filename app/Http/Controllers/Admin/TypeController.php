<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//models
use App\Models\Type;

//requests
use App\http\Requests\type\StoreTypeRequest;
use App\http\Requests\type\UpdateTypeRequest;


class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::all();

        return view('admin.types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTypeRequest $request)
    {
        $formdata = $request->validated();

        $project = Type::create([
             'name' => $formdata['name'],
             'slug' => str()->slug($formdata['name']),
        ]);
 
        return redirect()->route('admin.types.index', compact('type'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {

        return view('admin.types.show', compact('type'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTypeRequest $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
