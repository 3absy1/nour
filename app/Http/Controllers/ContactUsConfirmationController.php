<?php

namespace App\Http\Controllers;

use App\Http\Resources\confirmation\contactUsConfirmationCollection;
use App\Http\Resources\confirmation\contactUsConfirmationResource;
use App\Models\ContactUsConfirmation;
use App\Http\Requests\StoreContactUsConfirmationRequest;
use App\Http\Requests\UpdateContactUsConfirmationRequest;

class ContactUsConfirmationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $confirmation=ContactUsConfirmation::all();
        return new contactUsConfirmationCollection($confirmation);
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
     * @param  \App\Http\Requests\StoreContactUsConfirmationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContactUsConfirmationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactUsConfirmation  $contactUsConfirmation
     * @return \Illuminate\Http\Response
     */
    public function show(ContactUsConfirmation $contactUsConfirmation)
    {
        return new contactUsConfirmationResource($contactUsConfirmation);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactUsConfirmation  $contactUsConfirmation
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactUsConfirmation $contactUsConfirmation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContactUsConfirmationRequest  $request
     * @param  \App\Models\ContactUsConfirmation  $contactUsConfirmation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContactUsConfirmationRequest $request, ContactUsConfirmation $contactUsConfirmation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactUsConfirmation  $contactUsConfirmation
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactUsConfirmation $contactUsConfirmation)
    {
        //
    }
}
