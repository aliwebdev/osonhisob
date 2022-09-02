<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $account = Account::paginate(5);

        return view('account.index')->with('account', $account);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('account.create');
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
            'hisob_raqam' => 'required|min:8',
            'kimdan' => 'required',
            'pul_miqdori' => 'required',
            'pul_birligi' => 'required',
            'd_qiymati' => 'required',
        ]);
        $data = $request->all();

        $account = Account::create($data);

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
        return redirect()->route('accounts.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show($account)
    {
        
        $filter = DB::table('accounts')->where('kimga', $account)->get();

        return view('account.show', ['account' => $filter]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
    {
        
        return view('account.edit',[
            'account' => $account
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $account)
    {
        
        $data = $request->validate([
            'kimga' => 'required|min:3',
            'hisob_raqam' => 'required|min:8',
            'kimdan' => 'required',
            'pul_miqdori' => 'required',
            'pul_birligi' => 'required',
            'd_qiymati' => 'required',
        ]);
        
        $data = $request->all();
        $account->update($data); 
        return redirect()->route('accounts.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        
        $account->delete();
        return redirect()->route('accounts.index'); 
    }
}
