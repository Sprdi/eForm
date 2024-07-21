<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pemohon;

use Illuminate\View\View;

use Illuminate\Http\RedirectResponse;

use App\Exports\PemohonsExport;

use Maatwebsite\Excel\Facades\Excel;

use PDF;


class PemohonController extends Controller

{
    /**
     * index
     *
     * @return void
     */
    public function index(): View
    {
        //get all pemohons
        $pemohons = Pemohon::latest()->paginate(10);

        //render view with pemohons
        return view('pemohons.index', compact('pemohons'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        //get all pemohons
        $pemohons = Pemohon::latest()->paginate(10);

        return view('pemohons.create', compact('pemohons'));
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'nama' => 'required',
            'nik' => 'required',
            'email' => 'required',
            'divisi' => 'required',
            'grup' => 'required',
            'kebutuhan' => 'required',
            'akses' => 'required',
            'koneksiAplikasi' => 'required',
            'mulai' => 'required',
            'sampai' => 'required',
            'ipSource' => 'required',
            'ipDestination' => 'required',
            'port' => 'required',
            'initiateConnection' => 'required',
            'lampiran' => 'required'
        ]);

        //create product
        Pemohon::create([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'email' => $request->email,
            'divisi' => $request->divisi,
            'grup' => $request->grup,
            'kebutuhan' => $request->kebutuhan,
            'akses' => $request->akses,
            'koneksiAplikasi' => $request->koneksiAplikasi,
            'mulai' => $request->mulai,
            'sampai' => $request->sampai,
            'ipSource' => $request->ipSource,
            'ipDestination' => $request->ipDestination,
            'port' => $request->port,
            'initiateConnection' => $request->initiateConnection,
            'lampiran' => $request->lampiran,
        ]);

        

        //redirect to index
        return redirect()->route('pemohons.index');
        // ->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        //get pemohon by ID
        $pemohon = Pemohon::findOrFail($id);

        //render view with pemohon
        return view('pemohons.show', compact('pemohon'));
    }
    public function destroy($id): RedirectResponse
    {
        //get  by ID
        $pemohon = Pemohon::findOrFail($id);

        //delete pemohon
        $pemohon->delete();

        //redirect to index
        return redirect()->route('pemohons.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
    public function export()
    {
        return Excel::download(new PemohonsExport, 'pemohons.xlsx');
    }
    public function exportPdf()
    {
        $pemohons = Pemohon::all();

        $pdf = PDF::loadView('pemohons.export', compact('pemohons'))->setPaper('a4', 'landscape');
        return $pdf->download('pemohons.pdf');
    }
}
