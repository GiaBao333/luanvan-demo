<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Canbo;
class CanboController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('dashboard.canbo.index');
        // echo "string";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.canbo.create');
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
            'mscb' => 'required',
            'ten' => 'required',
            'sdt' => 'required',
            'diachi' => 'required',
            'email' => 'required',
            'ngaysinh' => 'required',
            'sinhvien' => 'required',
            ]);
        $data = $request->all();
        Canbo::create($data);
        return redirect()->intended('/canbo');
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
        return view('dashboard.canbo.edit')
                ->with('canbo',Canbo::find($id));
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
            'mscb' => 'required',
            'ten' => 'required',
            'sdt' => 'required',
            'diachi' => 'required',
            'email' => 'required',
            'ngaysinh' => 'required',
            'sinhvien' => 'required',
            ]);
        $canbo = Canbo::find($id);
        $canbo['ten']=$request['ten'];
        $canbo->save();
        return redirect()->intended('/canbo');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $canbo = Canbo::findOrFail($id);
        $canbo->delete();
        return redirect()->intended('/canbo');
    }
}
