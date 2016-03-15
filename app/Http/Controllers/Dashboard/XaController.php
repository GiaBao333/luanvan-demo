<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Xa;
class XaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('dashboard.xa.index');
        // echo "string";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.xa.create');
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
            'huyen_quan_id' => 'required',
            ]);
        $xa = new Xa();
        $xa['ten'] = $request['ten'];
        $xa['huyen_quan_id'] = $request['huyen_quan_id'];
        $xa->save();
        return redirect()->intended('/xa');
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
        return view('dashboard.xa.edit')
                ->with('xa',Xa::find($id));
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
            'huyen_quan_id' => 'required',
            ]);
        $xa = Xa::find($id);
        $xa['ten']=$request['ten'];
        $xa['huyen_quan_id'] = $request['huyen_quan_id'];
        $xa->save();
        return redirect()->intended('/xa');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $xa = Xa::findOrFail($id);
        $xa->delete();
        return redirect()->intended('/xa');
    }
}
