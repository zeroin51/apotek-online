<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Stock;
use Illuminate\Http\Request;

class DashboardObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.obats.index', [
            'title' => "Obat",
            'obats' => Obat::latest()->paginate(10),
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
        // $request->file('img')->store('obat-image');

        $validatedData = $request->validate([
            'code' => 'required|max:4|unique:obats',
            'name' => 'required',
            'description' => 'required|max:250',
        ]);


        $validatedData['status'] = false;

        Obat::create($validatedData);

        return redirect('/dashboard/obats')->with('obatSuccess', 'Data Obat berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function show(Obat $obat)
    {
        return view('dashboard.obats.show', [
            'title' => $obat->name,
            'obat' => $obat,
            'obats' => Obat::all(),
            'stock' => Stock::where('obat_id', $obat->id)->get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function edit(Obat $obat)
    {
        return json_encode($obat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Obat $obat)
    {
        // return $request;
        $rules = [
            'name' => 'required',
            'description' => 'required|max:250',
        ];

        if ($request->code != $obat->code) {
            $rules['code'] = 'required|max:4|unique:obat';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('img')) {
            $validatedData['img'] = $request->file('img')->store('obat-image');
        } else {
            $validatedData['img'] = "obat-image/obatdefault.jpg";
        }

        $validatedData['status'] = false;

        Obat::where('id', $obat->id)
            ->update($validatedData);

        return redirect('/dashboard/obats')->with('obatSuccess', 'Data Obat berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Obat $obat)
    {
        Obat::destroy($obat->id);
        return redirect('/dashboard/obats')->with('deleteObat', 'Data Obat berhasil dihapus');
    }
}
