<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Monhoc;
class MonhocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('dashboard.monhoc.index');
        // echo "string";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.monhoc.create');
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
            'batbuoc' => 'required',
            'xettn' => 'required',
            ]);
        $data = $request->all();
        Monhoc::create($data);
        return redirect()->intended('/monhoc');
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
        return view('dashboard.monhoc.edit')
                ->with('monhoc',Monhoc::find($id));
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
            'batbuoc' => 'required',
            'xettn' => 'required',
            ]);
        $monhoc = Monhoc::find($id);
        $monhoc['ten']=$request['ten'];
        $monhoc['batbuoc']=$request['batbuoc'];
        $monhoc['xettn']=$request['xettn'];
        $monhoc->save();
        return redirect()->intended('/monhoc');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $monhoc = Monhoc::findOrFail($id);
        $monhoc->delete();
        return redirect()->intended('/monhoc');
    }
}
