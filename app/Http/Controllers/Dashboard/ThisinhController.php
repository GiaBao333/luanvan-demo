<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Thisinh;
use App\Kvut;
use App\Doituong;
use App\Tongiao;
use App\Dantoc;
use App\Hanhkiem;
use App\Hocluc;
use App\Truongthpt;
use App\Diemkk;
class ThisinhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('dashboard.thisinh.index');
        // echo "string";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.thisinh.create');
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
            'sbd' => 'required',
            'ten' => 'required',
            'ngaysinh' => 'required',
            'sdt' => 'required',
            'email' => 'required',
            'diachi' => 'required',
            'tencha' => 'required',
            'nncha' => 'required',
            'tenme' => 'required',
            'nnme' => 'required',
            'ap_kv_id' => 'required',
            'kv_ut_id' => 'required',
            'doi_tuong_id' => 'required',
            'ton_giao_id' => 'required',
            'dan_toc_id' => 'required',
            'truong_thpt_id' => 'required',
            'diem_kk_id' => 'required',
            'hoc_luc_id' => 'required',
            'hanh_kiem_id' => 'required',
            ]);
        $thisinh = new Thisinh();
        $thisinh['sbd'] = $request['sbd'];
        $thisinh['ten'] = $request['ten'];
        $thisinh['ngaysinh'] = $request['ngaysinh'];
        $thisinh['sdt'] = $request['sdt'];
        $thisinh['email'] = $request['email'];
        $thisinh['diachi'] = $request['diachi'];
        $thisinh['tencha'] = $request['tencha'];
        $thisinh['nncha'] = $request['nncha'];
        $thisinh['tenme'] = $request['tenme'];
        $thisinh['nnme'] = $request['nnme'];
        $thisinh['tudo'] = $request['tudo'];
        $thisinh['ap_kv_id'] = $request['ap_kv_id'];
        $thisinh['kv_ut_id'] = $request['kv_ut_id'];
        $thisinh['doi_tuong_id'] = $request['doi_tuong_id'];
        $thisinh['ton_giao_id'] = $request['ton_giao_id'];
        $thisinh['dan_toc_id'] = $request['dan_toc_id'];
        $thisinh['truong_thpt_id'] = $request['truong_thpt_id'];
        $thisinh['diem_kk_id'] = $request['diem_kk_id'];
        $thisinh['hanh_kiem_id'] = $request['hanh_kiem_id'];
        $thisinh['hoc_luc_id'] = $request['hoc_luc_id'];
        $thisinh->save();
        return redirect()->intended('/thisinh');
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
        $thisinh = Thisinh::find($id);
        $html = '<div class="row">
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        
                    </div>
                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td>Số báo danh:</td>
                                    <td>'.$thisinh->sbd.'</td>
                                    <td>Thuộc khu vực ưu tiên:</td>
                                    <td>'.Kvut::find($thisinh->kv_ut_id)->ten.'</td>
                                </tr>
                                <tr>
                                    <td>Tên:</td>
                                    <td>'.$thisinh->ten.'</td>
                                    <td>Thuộc đối tượng ưu tiên:</td>
                                    <td>'.Doituong::find($thisinh->doi_tuong_id)->ten.'</td>
                                </tr>
                                <tr>
                                    <td>Ngày sinh:</td>
                                    <td>'.$thisinh->ngaysinh.'</td>
                                    <td>Thuộc dân tộc:</td>
                                    <td>'.Dantoc::find($thisinh->dan_toc_id)->ten.'</td>
                                </tr>
                                <tr>
                                    <td>Số điện thoại:</td>
                                    <td>'.$thisinh->sdt.'</td>
                                    <td>Thuộc tôn giáo:</td>
                                    <td>'.Tongiao::find($thisinh->ton_giao_id)->ten.'</td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td>'.$thisinh->email.'</td>
                                    <td>Trường THPT:</td>
                                    <td>'.Truongthpt::find($thisinh->truong_thpt_id)->ten.'</td>
                                </tr>
                                <tr>
                                    <td>Địa chỉ:</td>
                                    <td>'.$thisinh->diachi.'</td>
                                    <td>Điểm khuyến khích:</td>
                                    <td>'.Diemkk::find($thisinh->diem_kk_id)->ten.'</td>
                                </tr>
                                <tr>
                                    <td>Tên cha:</td>
                                    <td>'.$thisinh->tencha.'</td>
                                    <td>Học lực:</td>
                                    <td>'.Hocluc::find($thisinh->hoc_luc_id)->ten.'</td>
                                </tr>
                                <tr>
                                    <td>Nghề nghiệp cha:</td>
                                    <td>'.$thisinh->nncha.'</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Tên mẹ:</td>
                                    <td>'.$thisinh->tenme.'</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Nghề nghiệp mẹ:</td>
                                    <td>'.$thisinh->nnme.'</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>';
        return $html;
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
        return view('dashboard.thisinh.edit')
                ->with('thisinh',Thisinh::find($id));
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
            'sbd' => 'required',
            'ten' => 'required',
            'ngaysinh' => 'required',
            'sdt' => 'required',
            'email' => 'required',
            'diachi' => 'required',
            'tencha' => 'required',
            'nncha' => 'required',
            'tenme' => 'required',
            'nnme' => 'required',
            'tudo' => 'required',
            'ap_kv_id' => 'required',
            'kv_ut_id' => 'required',
            'doi_tuong_id' => 'required',
            'ton_giao_id' => 'required',
            'dan_toc_id' => 'required',
            'truong_thpt_id' => 'required',
            'diem_kk_id' => 'required',
            'hoc_luc_id' => 'required',
            'hanh_kiem_id' => 'required',
            ]);
        $thisinh = Thisinh::find($id);
        $thisinh['sbd'] = $request['sbd'];
        $thisinh['ten'] = $request['ten'];
        $thisinh['ngaysinh'] = $request['ngaysinh'];
        $thisinh['sdt'] = $request['sdt'];
        $thisinh['email'] = $request['email'];
        $thisinh['diachi'] = $request['diachi'];
        $thisinh['tencha'] = $request['tencha'];
        $thisinh['nncha'] = $request['nncha'];
        $thisinh['tenme'] = $request['tenme'];
        $thisinh['nnme'] = $request['nnme'];
        $thisinh['tudo'] = $request['tudo'];
        $thisinh['ap_kv_id'] = $request['ap_kv_id'];
        $thisinh['kv_ut_id'] = $request['kv_ut_id'];
        $thisinh['doi_tuong_id'] = $request['doi_tuong_id'];
        $thisinh['ton_giao_id'] = $request['ton_giao_id'];
        $thisinh['dan_toc_id'] = $request['dan_toc_id'];
        $thisinh['truong_thpt_id'] = $request['truong_thpt_id'];
        $thisinh['diem_kk_id'] = $request['diem_kk_id'];
        $thisinh['hanh_kiem_id'] = $request['hanh_kiem_id'];
        $thisinh['hoc_luc_id'] = $request['hoc_luc_id'];
        $thisinh->save();
        return redirect()->intended('/thisinh');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $thisinh = Thisinh::findOrFail($id);
        $thisinh->delete();
        return redirect()->intended('/thisinh');
    }
}
