<?php

namespace App\Http\Controllers;

use App\Models\Inventori;
use Illuminate\Http\Request;

class DashboardInventoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;
        return view('dashboard.inventori.index', [
            'barang' => Inventori::where('id', 'like', '%' . $search . '%')
            ->orWhere('nama_barang', 'like', '%' . $search . '%')
            ->orWhere('merk', 'like', '%' . $search . '%')
            ->orWhere('bahan', 'like', '%' . $search . '%')
            ->orWhere('tgl_perolehan', 'like', '%' . $search . '%')
            ->orWhere('asal_usul', 'like', '%' . $search . '%')
            ->orWhere('kondisi', 'like', '%' . $search . '%')
            ->orWhere('jumlah', 'like', '%' . $search . '%')
            ->orWhere('kap_barang', 'like', '%' . $search . '%')->latest()->paginate('15')->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.inventori.create');
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
            'nama_barang' => 'required|max:255',
            'merk' => 'required|max:255',
            'bahan' => 'required|max:255',
            'tgl_perolehan' => 'required',
            'asal_usul' => 'required|max:255',
            'kondisi' => 'required',
            'jumlah' => 'required',
            'kap_barang' => 'nullable'
        ]);

        Inventori::create($validatedData);

        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventori  $inventori
     * @return \Illuminate\Http\Response
     */
    public function show(Inventori $dashboard)
    {
        return view('dashboard.inventori.show', [
            'item' => $dashboard
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventori  $inventori
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventori $dashboard)
    {
        return view('dashboard.inventori.edit', [
            'item' => $dashboard
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventori  $inventori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventori $dashboard)
    {
        $validatedData = $request->validate([
            'nama_barang' => 'required|max:255',
            'merk' => 'required|max:255',
            'bahan' => 'required|max:255',
            'tgl_perolehan' => 'required',
            'asal_usul' => 'required|max:255',
            'kondisi' => 'required',
            'jumlah' => 'required',
            'kap_barang' => 'nullable'
        ]);

        Inventori::where('id', $dashboard->id)->update($validatedData);

        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventori  $inventori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventori $dashboard)
    {
        Inventori::destroy($dashboard->id);
        return redirect('/dashboard');
    }

    public function cetakSeluruh()
    {
        $s = Inventori::sum('jumlah');
        $d = Inventori::sum('kap_barang');
        return view('dashboard.inventori.cetak-seluruh', [
            'barang' => Inventori::latest()->get(),
            'ttl_barang' => $s,
            'ttl_harga' => $d
        ]);
    }
}
