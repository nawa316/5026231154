<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VgaController extends Controller
{
    public function index()
    {

        $vga = DB::table('vga')->paginate(10);
        return view('vga/index', ['vga' => $vga]);
    }

    public function show($id)
    {
        $image = ["https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//100/MTA-13904775/colorful_colorful_geforce_gtx_1660_super_nb_6g_vga_card_-nvidia_geforce_official_shop-_full01_heqfrrri.jpg",
                  "https://oneit-solution.com/wp-content/uploads/2023/07/704fdb53-f468-46bf-ae60-4105452dc978.jpg"];
        $vga = DB::table('vga')->find($id);
        return view('vga/detail', ['vga' => $vga, 'image' => $image]);
    }

    public function create()
    {
        // Logic to show form for creating a new VGA
        return view('vga/create');
    }

    public function store(Request $request)
    {
        // Logic to store new VGA data
        $this->validate($request, [
            'merk' => 'required|min:3|max:50',
            'harga' => 'required|numeric',
            'tersedia' => 'required|boolean',
            'berat' => 'required|numeric'
        ]);

        DB::table('vga')->insert([
            'merk_vga' => $request->merk,
            'harga_vga' => $request->harga,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        return redirect('/vga')->with('success', 'VGA created successfully!');
    }

     public function edit($id)
    {
      // mengambil data vga berdasarkan id yang dipilih
      $vga = DB::table('vga')
        ->where('id',$id) // khusus operator =
        ->get();
      // passing data vga yang didapat ke view edit.blade.php
      return view('vga/edit',['vga' => $vga]);
    }

    public function update(Request $request)
    {
      // update data vga
      DB::table('vga')->where('id',$request->id)->update([
        'merk_vga' => $request->merk,
        'harga_vga' => $request->harga,
        'tersedia' => $request->tersedia,
        'berat' => $request->berat
      ]);
      // alihkan halaman ke halaman vga
      return redirect('/vga');
    }

    public function delete($id)
    {
      // menghapus data vga berdasarkan id yang dipilih
      DB::table('vga')->where('id',$id)->delete();

      return redirect('/vga');
    }

       public function search(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table vga sesuai pencarian data
		$vga = DB::table('vga')
		->where('merk_vga','like',"%".$cari."%")
		->paginate();

    		// mengirim data vga ke view index
		return view('vga/index',['vga' => $vga]);

	}
}
