<?php

namespace App\Http\Controllers;

use App\Experties;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Resources\ExpertiesResource;

class ExpertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ExpertiesResource::collection(Experties::all());
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'type' => 'required'
        ]);

        $experte = new Experties;
        $experte->name = $request->name;
        $experte->type = $request->type;
        $experte->link = $request->link;
        $experte->save();
        return response('Experties Added', Response::HTTP_ACCEPTED);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Experties  $experties
     * @return \Illuminate\Http\Response
     */
    public function show(Experties $experties)
    {
        return new ExpertiesResource($experties);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Experties  $experties
     * @return \Illuminate\Http\Response
     */
    public function edit(Experties $experties)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Experties  $experties
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $experties)
    {
        $experties = Experties::FindOrFail($experties);
        $experties->name = $request->name;
        $experties->type = $request->type;
        $experties->link = $request->link;
        $experties->save();

        return response('Expertie Updated', Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Experties  $experties
     * @return \Illuminate\Http\Response
     */
    public function destroy($experties)
    {
        Experties::Find($experties)->delete();
        return response('null', Response::HTTP_NO_CONTENT);
    }
}
