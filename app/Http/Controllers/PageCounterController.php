<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageCounterController extends Controller
{
    public function index()
    {
        $pageCounters = DB::table('pagecounter')->get();
        // Increment the page view count for each page
        return view('pagecounter/index', ['pageCounters' => $pageCounters]);
    }

    public function show(Request $request, $id)
    {
        DB::table('pagecounter')->where('id',$request->id)->update([
            'jumlah' => DB::raw('jumlah + 1'),
        ]);

        $page = DB::table('pagecounter')->where('id', $id)->first();
        return view('pagecounter/page'.$id, ['page' => $page]);
    }
}
