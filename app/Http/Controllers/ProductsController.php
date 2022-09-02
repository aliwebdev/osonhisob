<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::paginate(10);

        return view('product.index', [
            'products' => $product
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
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
            'm_nomi' => 'required|min:3',
            'm_soni' => 'required',
            'm_turi' => 'required',
        ]);
        $data = $request->all();

        $account = Product::create($data);

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
        return redirect()->route('products.index'); 
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($product)
    {
        $filter = DB::table('products')->where('m_nomi', $product)->get();

        return view('product.show', ['products' => $filter]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('product.edit',[
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'm_nomi' => 'required|min:3',
            'm_soni' => 'required',
            'sotilgan_soni' => 'required',
            'm_turi' => 'required',
        ]);
        
        $data = $request->all();
        $product->update($data); 
        return redirect()->route('products.index');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        
        $product->delete();
        return redirect()->route('products.index');
    }
}
