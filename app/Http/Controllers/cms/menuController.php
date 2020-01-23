<?php

namespace App\Http\Controllers\cms;

use App\Models\Menu;
use App\Models\SubMenu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;

class menuController extends Controller
{
    public function index()
    {
        $menus=Menu::all();
        View::share('menus',$menus);

        return view('cms.menu.list');

    }

    public function create()
    {
        return view('cms.menu.create');
    }

    public function create_post(request $request)
    {
        $menu = new Menu();
        $menu->title = $request->title;
        $menu->content = $request->content;
        $menu->order = $request->order;
        $menu->save();


        return redirect()->route('cms.menu.create');
    }

    public function createSub()
    {
        $menus = Menu::all();
        View::share('menus', $menus);
        return view('cms.menu.createSub');
    }
    public function createSub_post(Request $request)
    {
        $submenus=new SubMenu();
        $submenus->menu_id=$request->menu_id;
        $submenus->title=$request->title;
        $submenus->content=$request->content;
        $submenus->order=$request->order;
        $submenus->save();

        return redirect()->route('cms.menu.createSub');
    }

    public function remove($id)
    {
     Menu::find($id)->delete();
     SubMenu::where('menu_id',$id)->delete();

     return redirect()->route('cms.menu.list');

    }
    public function remove_subs($id)
    {
       SubMenu::find($id)->delete();
       return redirect()->route('cms.menu.list');

    }
    public function edit($id)
    {
        $menus=Menu::find($id);
        View::share('menus',$menus);

        return view('cms.menu.edit');

    }
    public function edit_post(Request $request,$id){
      $menus=Menu::find($id);
      $menus->title=$request->input('title');
      $menus->content=$request->input('content');
      $menus->order=$request->input('order');

      $menus->save();
      return redirect()->route('cms.menu.list');
    }
    public function edit_subs(Request $request, $id)
    {
         $menu=Menu::all();
         $submenu=SubMenu::find($id);
         View::share('menu',$menu);
         View::share('submenu',$submenu);
        return view('cms.menu.editsub');
    }
    public function edit_subs_post(Request $request,$id){
        $submenu=SubMenu::find($id);
        $submenu->menu_id=$request->input('menu_id');
        $submenu->title=$request->input('title');
        $submenu->content=$request->input('content');
        $submenu->order=$request->input('order');
        $submenu->save();
        return redirect()->route('cms.menu.list');

    }


}
