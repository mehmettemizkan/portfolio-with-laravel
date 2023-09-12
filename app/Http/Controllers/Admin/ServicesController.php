<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ServiceDataTable;
use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ServiceDataTable $dataTable)
    {
        return $dataTable->render('admin.services.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => ['required', 'max:100'],
            'sub_title' => ['required', 'max:300'],
            'description' => ['required', 'max:800'],
        ]);
        $createService = new Service();
        $createService->title = $request->title;
        $createService->sub_title = $request->sub_title;
        $createService->description = $request->description;
        $createService->save();

        toastr()->success('Created Successfuly', 'Congrats');
        return redirect()->route('admin.services.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Service::findOrFail($id);
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => ['required', 'max:100'],
            'sub_title' => ['required', 'max:300'],
            'description' => ['required', 'max:800'],
        ]);
        $service = Service::findOrFail($id);
        $service->title = $request->title;
        $service->sub_title = $request->sub_title;
        $service->description = $request->description;
        $service->save();

        toastr()->success('Updated Successfuly', 'Congrats');
        return redirect()->route('admin.services.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
    }
}
