<?php

namespace App\Http\Controllers\Front;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Support\Facades\View;

class newsController extends Controller
{
    public function index(){
        $news=News::all();
        $menu=Menu::orderBy('order')->get();
        View::share('news',$news);
        View::share('menu',$menu);


        return view('Front.News.index');
    }
    public function view($id){

        $menu=Menu::orderBy('order')->get();
        $news=News::find($id);
        $news2=News::all();
        View::share('news',$news);
        View::share('news2',$news2);
        View::share('menu',$menu);
        return view('Front.News.view');
    }

}
