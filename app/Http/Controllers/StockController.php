<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;

class StockController extends Controller
{
    return view('dashboard.stocks.index', [
        'title' => "Data Stock",
        'stocks' => Stock::latest()->paginate(10)->withQueryString(),
    ]);
}
