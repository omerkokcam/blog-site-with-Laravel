<?php

namespace App\Http\Controllers\Front;

use App\Models\SubMenu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Menu;
use Illuminate\Support\Facades\View;

class homeController extends Controller
{
    public function index(){

        $news=News::all();
        $menu=Menu::orderBy('order')->get();
        View::share('menu',$menu);
        View::share('news',$news);
        return view('Front.Home.index');
    }

    public function page($id){
        $news=News::all();
        View::share('news',$news);
        $menu=Menu::orderBy('order')->get();
        View::share('menu',$menu);
        $men=Menu::find($id);
        View::share('men',$men);
        return view('Front.Layouts.page');
    }


    public function spage($id){
        $news=News::all();
        View::share('news',$news);
        $menu=Menu::orderBy('order')->get();
        View::share('menu',$menu);
        $men=Submenu::find($id);
        View::share('men',$men);
        return view('Front.Layouts.page');
    }


}
