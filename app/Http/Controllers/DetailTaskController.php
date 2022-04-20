<?php

namespace App\Http\Controllers;

use App\Models\DetailTask;
use App\Http\Requests\StoreDetailTaskRequest;
use App\Http\Requests\UpdateDetailTaskRequest;

class DetailTaskController extends Controller
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
     * @param  \App\Http\Requests\StoreDetailTaskRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDetailTaskRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetailTask  $detailTask
     * @return \Illuminate\Http\Response
     */
    public function show(DetailTask $detailTask)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetailTask  $detailTask
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailTask $detailTask)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDetailTaskRequest  $request
     * @param  \App\Models\DetailTask  $detailTask
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDetailTaskRequest $request, DetailTask $detailTask)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetailTask  $detailTask
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailTask $detailTask)
    {
        //
    }
}
