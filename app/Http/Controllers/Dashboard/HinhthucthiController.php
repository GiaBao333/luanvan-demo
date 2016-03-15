<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Hinhthucthi;
class HinhthucthiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('dashboard.hinhthucthi.index');
        // echo "string";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.hinhthucthi.create');
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
            'thoiluong' => 'required',
            ]);
        $data = $request->all();
        Hinhthucthi::create($data);
        return redirect()->intended('/hinhthucthi');
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
        //
        return view('dashboard.hinhthucthi.edit')
                ->with('hinhthucthi',Hinhthucthi::find($id));
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
        //
        $this->validate($request, [
            'ten' => 'required',
            'thoiluong' => 'required',
            ]);
        $hinhthucthi = Hinhthucthi::find($id);
        $hinhthucthi['ten']=$request['ten'];
        $hinhthucthi['thoiluong']=$request['thoiluong'];
        $hinhthucthi->save();
        return redirect()->intended('/hinhthucthi');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hinhthucthi = Hinhthucthi::findOrFail($id);
        $hinhthucthi->delete();
        return redirect()->intended('/hinhthucthi');
    }
}
