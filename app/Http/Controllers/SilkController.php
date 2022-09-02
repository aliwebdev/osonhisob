<?php

namespace App\Http\Controllers;

use App\Models\Silk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SilkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $silk = Silk::paginate(5);

        return view('silk.index', [
            'silk' => $silk
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('silk.create');
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
            'olindi' => 'required',
            'm_narxi' => 'required',
            'berilgan_summa' => 'required',
            'birligi' => 'required',
            'd_qiymati' => 'required',
            'qancha_miqdor' => 'required',
            'miqdor_birlig' => 'required',
        ]);
        $data = $request->all();

        $silk = Silk::create($data);

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
        return redirect()->route('silk.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Silk  $silk
     * @return \Illuminate\Http\Response
     */
    public function show($silk)
    {
       
        $filteredByGived = DB::table('silk')->where('olindi', $silk)->get();

        return view('silk.show', ['silk' => $filteredByGived]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Silk  $silk
     * @return \Illuminate\Http\Response
     */
    public function edit(Silk $silk)
    {
        return view('silk.edit',[
            'silk' => $silk
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Silk  $silk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Silk $silk)
    {
        
        $data = $request->validate([
            'olindi' => 'required',
            'm_narxi' => 'required',
            'berilgan_summa' => 'required',
            'birligi' => 'required',
            'd_qiymati' => 'required',
            'qancha_miqdor' => 'required',
            'miqdor_birlig' => 'required',
        ]);
        $data = $request->all();
        $silk->update($data); 
        return redirect()->route('silk.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Silk  $silk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Silk $silk)
    {
        $silk->delete();
        return redirect()->route('silk.index'); 
    }
}
