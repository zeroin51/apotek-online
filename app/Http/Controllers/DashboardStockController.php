<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\Obat;

class DashboardStockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.stocks.index', [
            'adminStocks' => Stock::latest()->get(),
            'userStocks' => Stock::where('user_id', auth()->user()->id)->get(),
            'title' => "Stock",
            'obats' => Obat::all(),
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
        $validatedData = $request->validate([
            'obat_id' => 'required',
            'time_start_fill' => 'required',
            'time_end_fill' => 'required',
            'purpose' => 'required|max:250',
        ]);
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['addStock_start'] = now();
        $validatedData['status'] = 'pending';
        $validatedData['addStock_end'] = null;

        Stock::create($validatedData);

        return redirect('/dashboard/stocks')->with('stockSuccess', 'Tambah Stock diajukan. Harap tunggu konfirmasi admin.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(Stock $stock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock $stock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stock $stock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock $stock)
    {
        Stock::destroy($stock->id);
        return redirect('/dashboard/stocks')->with('deleteStock', 'Data Tambah Stock berhasil dihapus');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function endAddStock($id)
    {
        $addStock = [
            'addStock_end' => now(),
            'status' => 'selesai',
        ];

        Stock::where('id', $id)->update($addStock);

        return redirect('/dashboard/stocks');
    }
}
