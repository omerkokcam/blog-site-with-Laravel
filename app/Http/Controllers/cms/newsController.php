<?php

namespace App\Http\Controllers\cms;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;

class newsController extends Controller
{

    public function index(){
        $news=News::all();
        View::share('news',$news);

        return view('cms.news.list');
    }
    public function create() {
        return view('cms.news.create');
    }


    public function create_post(Request $request){
          $news=new News();
          $news->title=$request->title;
          $news->content=$request->content;


          if($request->hasFile('image')){
              $file=$request->file('image');
              $file->move(public_path().'/images/news',$file->getClientOriginalName());
              $news->img_url=$file->getClientOriginalName();
          }
          $news->save();
        return redirect()->route('cms.news.create');
    }
    public function remove($id){
        $news=News::find($id);
        $news->delete();
        return redirect()->route('cms.news.list');

    }
    public function edit($id){
        $news=News::find($id);
        View::share('news',$news);
        $news->update();
        return view('cms.news.edit');
    }
    public function edit_post($id,Request $request){
        $news=News::find($id);
        if(Input::hasfile('image'))
        {

            $image_path=public_path() . '/images/news/' . $news -> img_url;
            unlink($image_path);
            $file=Input::file('image');
            $file->move(public_path() . '/images/news' , $file->getClientOriginalName());
            $news->img_url=$file->getClientOriginalName();

        }
        $news->title=$request->input('title');
        $news->content=$request->input('content');
        $news->save();
        return redirect()->route('cms.news.list');
    }
}
