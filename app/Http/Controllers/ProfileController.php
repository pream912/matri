<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('profiles.search');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        return view('profiles.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filenameWithExt1 = $request->file('photo')->getClientOriginalName();
        $filename1 = pathinfo($filenameWithExt1, PATHINFO_FILENAME);
        $extension1 = $request->file('photo')->getClientOriginalExtension();
        $fileNameToStore1 = $filename1.'_'.time().'.'.$extension1;
        $path1 = $request->file('photo')->storeAs('public/photos', $fileNameToStore1);

        $filenameWithExt2 = $request->file('horoscope')->getClientOriginalName();
        $filename2 = pathinfo($filenameWithExt2, PATHINFO_FILENAME);
        $extension2 = $request->file('photo')->getClientOriginalExtension();
        $fileNameToStore2 = $filename2.'_'.time().'.'.$extension2;
        $path2 = $request->file('horoscope')->storeAs('public/horoscopes', $fileNameToStore2);

        $profiles = new Profile;
        $profiles->user_id = 0;
        $profiles->active = 0;
        $profiles->name = $request->name;
        $profiles->caste = $request->caste;
        $profiles->sex = $request->sex;
        $profiles->dob = $request->dob;
        $profiles->edu = $request->edu;
        $profiles->job = $request->job;
        $profiles->sal = $request->sal;
        $profiles->height = $request->height;
        $profiles->loc1 = $request->loc1;
        $profiles->loc2 = $request->loc2;
        $profiles->loc_i = $request->loc_i;
        $profiles->fname = $request->fname;
        $profiles->falive = $request->falive;
        $profiles->fjob = $request->fjob;
        $profiles->mname = $request->mname;
        $profiles->malive = $request->malive;
        $profiles->mjob = $request->mjob;
        $profiles->bro = $request->bro;
        $profiles->sis = $request->sis;
        $profiles->status = $request->status;
        $profiles->con_person = $request->con_person;
        $profiles->relation = $request->relation;
        $profiles->con1 = $request->con1;
        $profiles->con2 = $request->con2;
        $profiles->address = $request->address;
        $profiles->email = $request->email;
        $profiles->rasi = $request->rasi;
        $profiles->natcha = $request->natcha;
        $profiles->laknam = $request->laknam;
        $profiles->e_edu = $request->e_edu;
        $profiles->e_job = $request->e_job;
        $profiles->photo = $fileNameToStore1;
        $profiles->horoscope = $fileNameToStore2;
        $profiles->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request) 
    {
        $sex = $request->sex;
        $caste = $request->caste;
        $rasi = $request->rasi;
        $natcha = $request->natcha;

        $profiles = Profile::where('sex', $sex)
                               ->where('caste', $caste)
                               ->where('rasi', $rasi)
                               ->where('natcha', $natcha)
                               ->get();
        return view('profiles.result')->with('profiles', $profiles);
        
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
