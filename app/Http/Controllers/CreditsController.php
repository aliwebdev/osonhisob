<?php

namespace App\Http\Controllers;

use App\Models\Credit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreditsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $credit = Credit::paginate(5);

        return view('credit.index', [
            'credits' => $credit
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('credit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'kimdan' => 'required|min:3',
            'qancha' => 'required',
            'pul_birligi' => 'required',
            'd_qiymati' => 'required',
            'sana' => 'required',
        ]);
        $data = $request->all();

        $account = Credit::create($data);

        // $silk = new Silk;
        // $silk->nomi = $data['nomi'];
        // $silk->olindi = $data['olindi'];
        // $silk->qiymati = $data['qiymati'];
        // $silk->birligi = $data['birligi'];
        // $silk->d_qiymati = $data['d_qiymati'];
        // $silk->qancha_miqdor = $data['qancha_miqdor'];
        // $silk->miqdor_birlig = $data['miqdor_birlig'];
        // $silk->o_sana = $data['o_sana'];
        // $silk->o_vaqt = $data['o_vaqt'];
        // $silk->tavsif = $data['tavsif'];

        // $silk->save();
        return redirect()->route('credits.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Credit  $credit
     * @return \Illuminate\Http\Response
     */
    public function show($credit)
    {
        
        $credits = DB::table('credits')->where('kimdan', $credit)->get();

        return view('credit.show', ['credits' => $credits]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Credit  $credit
     * @return \Illuminate\Http\Response
     */
    public function edit(Credit $credit)
    {
        return view('credit.edit',[
            'credit' => $credit
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Credit  $credit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Credit $credit)
    {
        $data = $request->validate([
            'kimdan' => 'required|min:3',
            'qancha' => 'required',
            'pul_birligi' => 'required',
            'd_qiymati' => 'required',
            'sana' => 'required',
        ]);
        
        $data = $request->all();
        $credit->update($data); 
        return redirect()->route('credits.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Credit  $credit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Credit $credit)
    {
        $credit->delete();
        return redirect()->route('credits.index'); 
    }
}
