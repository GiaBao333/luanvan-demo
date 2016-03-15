<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Content;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.content.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.content.create')
                            ->with('images',$this->LoadImages());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required',
            'public'=> 'required',
            'featured'=>'required',
            'thumbnail'=>'required'
        ]);
        if (empty($request['alias'])) {
                $content = new Content();
                $content['title'] = trim($request['title']);
                $content['alias'] = str_replace(' ','-',$this->vn2latin(trim($request['title']), true));
                $content['quote'] = trim($request['quote']);
                $content['content'] = $request['content'];
                $content['category_id'] = $request['category_id'];
                $content['author_id'] = Auth::user()->id;
                $content['featured'] = $request['featured'];
                $content['thumbnail'] = $request['thumbnail'];
                $content['image'] = $request['image'];
                $content->save();
                return redirect()->intended('/content');
        }else{
                $content = new Content();
                $content->title = trim($request['title']);
                $content->alias = trim($request['alias']);
                $content->quote = trim($request['quote']);
                $content->content = $request['content'];
                $content->category_id = $request['category_id'];
                $content->author_id = Auth::user()->id;
                $content->featured = $request['featured'];
                $content->thumbnail = $request['thumbnail'];
                $content->image = $request['image'];
                $content->save();
                return redirect()->intended('/content');
        }
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
        return view('dashboard.content.edit')
                            ->with('content',Content::find($id))
                            ->with('images',$this->LoadImages());

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
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required',
            'public'=> 'required',
            'featured'=>'required',
            'thumbnail'=>'required'
        ]);
        if (empty($request['alias'])) {
                $content = Content::findOrFail($id);
                $content['title'] = trim($request['title']);
                $content['alias'] = str_replace(' ','-',$this->vn2latin(trim($request['title']), true));
                $content['quote'] = trim($request['quote']);
                $content['content'] = $request['content'];
                $content['category_id'] = $request['category_id'];
                $content['featured'] = $request['featured'];
                $content['thumbnail'] = $request['thumbnail'];
                $content['public'] = $request['public'];
                $content['image'] = $request['image'];
                $content->save();
                return redirect()->intended('/content');
        }else{
                $content = Content::findOrFail($id);
                $content->title = trim($request['title']);
                $content->alias = trim($request['alias']);
                $content->quote = trim($request['quote']);
                $content->content = $request['content'];
                $content->category_id = $request['category_id'];
                $content->featured = $request['featured'];
                $content->thumbnail = $request['thumbnail'];
                $content->image = $request['image'];
                $content->public = $request['public'];
                $content->save();
                return redirect()->intended('/content');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $content = Content::findOrFail($id);
        $content->delete();
        return redirect()->intended('/content');
    }
}
