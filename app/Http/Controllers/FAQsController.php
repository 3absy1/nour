<?php

namespace App\Http\Controllers;

use App\Http\Resources\FAQs\FAQsCollection;
use App\Http\Resources\FAQs\FAQsResource;
use App\Models\FAQs;
use App\Http\Requests\StoreFAQsRequest;
use App\Http\Requests\UpdateFAQsRequest;

class FAQsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs=FAQs::all();
        return new FAQsCollection($faqs);
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
     * @param  \App\Http\Requests\StoreFAQsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFAQsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FAQs  $fAQs
     * @return \Illuminate\Http\Response
     */
    public function show(FAQs $fAQs)
    {
        return new FAQsResource($fAQs);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FAQs  $fAQs
     * @return \Illuminate\Http\Response
     */
    public function edit(FAQs $fAQs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFAQsRequest  $request
     * @param  \App\Models\FAQs  $fAQs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFAQsRequest $request, FAQs $fAQs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FAQs  $fAQs
     * @return \Illuminate\Http\Response
     */
    public function destroy(FAQs $fAQs)
    {
        //
    }
}
