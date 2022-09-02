<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loan = Loan::paginate(5);

        return view('loan.index', [
            'loans' => $loan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('loan.create');
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
            'kimga' => 'required|min:3',
            'qancha' => 'required',
            'pul_birligi' => 'required',
            'd_qiymati' => 'required',
            'sana' => 'required',
        ]);
        $data = $request->all();

        $account = Loan::create($data);

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
        return redirect()->route('loans.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function show($loan)
    {
        
        $loans = DB::table('loans')->where('kimga', $loan)->get();

        return view('loan.show', ['loans' => $loans]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function edit(Loan $loan)
    {
        return view('loan.edit',[
            'loan' => $loan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loan $loan)
    {
        $data = $request->validate([
            'kimga' => 'required|min:3',
            'qancha' => 'required',
            'pul_birligi' => 'required',
            'd_qiymati' => 'required',
            'sana' => 'required',
        ]);
        $data = $request->all();
        $loan->update($data); 
        return redirect()->route('loans.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loan $loan)
    {
        
        $loan->delete();
        return redirect()->route('loans.index'); 
    }
}
