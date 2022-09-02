<?php

namespace App\Http\Controllers;

use App\Models\Daily;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
// 
class DailiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daily = Staff::with('dailys')->paginate(15);
        // dump($daily);
        return view('staff.dailylist')->with('daily',$daily);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $daily3 = Staff::paginate(5);
        return view('staff.daily')->with('daily2',$daily3);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect()->route('daily.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Daily  $daily
     * @return \Illuminate\Http\Response
     */
    public function show(Daily $daily)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Daily  $daily
     * @return \Illuminate\Http\Response
     */
    public function edit(Daily $daily)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Daily  $daily
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Daily $daily)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Daily  $daily
     * @return \Illuminate\Http\Response
     */
    public function destroy(Daily $daily)
    {
        $daily->delete();
        return redirect()->route('daily.index');
    }

    public function dailyinsert(Request $request)
    {
        $isValidate = $request->validate([
            'status' => 'required',
            'staff_id' => 'required',
        ]);


        if (Daily::whereDay('created_at', date('d', strtotime('this days')))->where('staff_id', $request->staff_id)->first() ? false : true) {
            
            $data = $request->all();
            
            $daily = Daily::create($data);
            
            // $daily->save();
        }
        return redirect()->route('daily.create');
    }
}
