<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Huyen;
class HuyenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('dashboard.huyen.index');
        // echo "string";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.huyen.create');
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
            'tinh_tp_id' => 'required',
            ]);
        $huyen = new Huyen();
        $huyen['ten'] = $request['ten'];
        $huyen['tinh_tp_id'] = $request['tinh_tp_id'];
        $huyen->save();
        return redirect()->intended('/huyen');
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
        return view('dashboard.huyen.edit')
                ->with('huyen',Huyen::find($id));
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
            'tinh_tp_id' => 'required',
            ]);
        $huyen = Huyen::find($id);
        $huyen['ten']=$request['ten'];
        $huyen['tinh_tp_id'] = $request['tinh_tp_id'];
        $huyen->save();
        return redirect()->intended('/huyen');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $huyen = Huyen::findOrFail($id);
        $huyen->delete();
        return redirect()->intended('/huyen');
    }
}
