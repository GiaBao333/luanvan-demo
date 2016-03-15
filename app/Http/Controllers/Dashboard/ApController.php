<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Ap;
class ApController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('dashboard.ap.index');
        // echo "string";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.ap.create');
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
            'xa_phuong_id' => 'required',
            ]);
        $ap = new Ap();
        $ap['ten'] = $request['ten'];
        $ap['xa_phuong_id'] = $request['xa_phuong_id'];
        $ap->save();
        return redirect()->intended('/ap');
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
        return view('dashboard.ap.edit')
                ->with('ap',Ap::find($id));
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
            'xa_phuong_id' => 'required',
            ]);
        $ap = Ap::find($id);
        $ap['ten']=$request['ten'];
        $ap['xa_phuong_id'] = $request['xa_phuong_id'];
        $ap->save();
        return redirect()->intended('/ap');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ap = Ap::findOrFail($id);
        $ap->delete();
        return redirect()->intended('/ap');
    }
}
