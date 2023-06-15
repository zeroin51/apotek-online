<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\Obat;

class StockMasukController extends Controller
{
    public function index()
    {
        return view('dashboard.stockmasuk.index', [
            'title' => "Stock Masuk",
            'stocks' => Stock::where('status', 'pending')->get(),
        ]);
    }

    public function acceptStocks($id)
    {
        $stockStatus = [
            'status' => 'ditambah',
        ];

        $stocks = Stock::where('id', $id)->update($stockStatus);

        return redirect('/dashboard/stockmasuk');
    }

    public function declineStocks($id)
    {
        $stockStatus = [
            'status' => 'ditolak',
        ];

        Stock::where('id', $id)->update($stockStatus);

        return redirect('/dashboard/stockmasuk');
    }
}
