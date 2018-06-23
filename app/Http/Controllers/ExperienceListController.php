<?php

namespace App\Http\Controllers;

use App\Experience;
use App\ExperienceList;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Resources\ExperienceListResource;


class ExperienceListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Experience $experience)
    {
        return ExperienceListResource::collection($experience->items);
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
    public function store(Request $request, $id)
    {
        $this->validate($request, [
            'item' => 'required'
        ]);

        $item = new ExperienceList;

        $item->item = $request->item;
        $item->experience_id = $id;
        $item->save();
        return response('Item Added', Response::HTTP_CREATED);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ExperienceList  $experienceList
     * @return \Illuminate\Http\Response
     */
    public function show(ExperienceList $experienceList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ExperienceList  $experienceList
     * @return \Illuminate\Http\Response
     */
    public function edit(ExperienceList $experienceList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ExperienceList  $experienceList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $experience, $experienceList)
    {
        
        $this->validate($request, [
            'item' => 'required'
        ]);


        $experienceList = ExperienceList::FindOrFail($experienceList);
        $experienceList->item = $request->item;
        $experienceList->save();

        return response('Item Updated', Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ExperienceList  $experienceList
     * @return \Illuminate\Http\Response
     */
    public function destroy($experience, $item)
    {
        ExperienceList::Find($item)->delete();
        return response('null', Response::HTTP_NO_CONTENT);
    }
}
