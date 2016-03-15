<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Doituong;

class DoituongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.doituong.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.doituong.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'ten' => 'required',
            'nhom' => 'required',
            'diemcong' => 'required',
            ]);
        $data = $request->all();
        Doituong::create($data);
        return redirect()->intended('/doituong');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.doituong.edit')
            ->with('doituong',Doituong::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'ten' => 'required',
            'nhom' => 'required',
            'diemcong' =>'required',
            ]);
        $doituong = Doituong::find($id);
        $doituong['ten']=$request['ten'];
        $doituong['nhom']=$request['nhom'];
        $doituong['diemcong']=$request['diemcong'];
        $doituong->save();
        return redirect()->intended('/doituong');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doituong = Doituong::findOrFail($id);
        $doituong->delete();
        return redirect()->intended('/doituong');
    }
}
