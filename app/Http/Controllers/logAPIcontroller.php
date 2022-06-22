<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\logAPI;
use App\Http\Resources\logAPIresource;

class logAPIcontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return logAPI::all();
    }
    
    public function create()
    {
        
    }

    public function store()
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Model\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(logAPI $logAPI)
    {
        return new logAPIresource($logAPI);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Model\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(logAPI $logAPI)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Model\logAPI  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, logAPI $logAPI)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Model\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(logAPI $logAPI)
    {
        
    }
}
