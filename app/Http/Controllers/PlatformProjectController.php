<?php

namespace App\Http\Controllers;

use App\Models\PlatformProject;
use App\Http\Requests\StorePlatformProjectRequest;
use App\Http\Requests\UpdatePlatformProjectRequest;

class PlatformProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorePlatformProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlatformProjectRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PlatformProject  $platformProject
     * @return \Illuminate\Http\Response
     */
    public function show(PlatformProject $platformProject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PlatformProject  $platformProject
     * @return \Illuminate\Http\Response
     */
    public function edit(PlatformProject $platformProject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlatformProjectRequest  $request
     * @param  \App\Models\PlatformProject  $platformProject
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlatformProjectRequest $request, PlatformProject $platformProject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlatformProject  $platformProject
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlatformProject $platformProject)
    {
        //
    }
}
