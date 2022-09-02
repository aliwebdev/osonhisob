<?php

namespace App\Http\Controllers;

use App\Models\Hisob;
use App\Models\Staff;
use Illuminate\Http\Request;

class HisobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = Staff::paginate(10);

        return view('staff.hisob', [
            'staff' => $staff
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hisob  $hisob
     * @return \Illuminate\Http\Response
     */
    public function show(Hisob $hisob)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hisob  $hisob
     * @return \Illuminate\Http\Response
     */
    public function edit(Hisob $hisob)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hisob  $hisob
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hisob $hisob)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hisob  $hisob
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hisob $hisob)
    {
        //
    }
}
