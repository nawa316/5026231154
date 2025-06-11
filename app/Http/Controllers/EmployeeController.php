<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = DB::table('karyawan')->paginate(10);
        return view('employee/index', ['employee' => $employee]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Logic to store a new employee in the database
        // Validate the request data 
        $this->validate($request, [
            'kodepegawai' => 'required',
            'namalengkap' => 'required|min:3|max:50',
            'divisi' => 'required|min:3|max:10',
            'departemen' => 'required|min:3|max:10'
        ]);

        //return error if the employee already exists
        if (DB::table('karyawan')->where('kodepegawai', $request->kodepegawai)->exists()) {
            return redirect('/employee/create')->with('error', 'Employee already exists.');
        } else {

        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);

        return redirect('/employee')->with('success', 'Employee created successfully!');
      }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($kodepegawai)
    {
        // Logic to show the form for editing an existing employee
        $employee = DB::table('karyawan')->where('kodepegawai', $kodepegawai)->get();
        if (!$employee) {
            return redirect('/employee')->with('error', 'Employee not found.');
        }
        return view('employee/edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // Logic to update an existing employee's details in the database

        DB::table('karyawan')->where('kodepegawai', $request->kodepegawai)->update([
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);

        return redirect('/employee')->with('success', 'Employee updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kodepegawai)
    {
        // Logic to delete an employee from the database
        $employee = DB::table('karyawan')->where('kodepegawai', $kodepegawai)->first();
        if (!$employee) {
            return redirect('/employee')->with('error', 'Employee not found.');
        }
        DB::table('karyawan')->where('kodepegawai', $kodepegawai)->delete();
        return redirect('/employee')->with('success', 'Employee deleted successfully!');
    }

    /**
     * Search for employees based on a query.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $cari = $request->cari;
        $employee = DB::table('karyawan')->where('namalengkap','like',"%".$cari."%")->paginate();

		return view('employee/index',['employee' => $employee]);
    }
}
