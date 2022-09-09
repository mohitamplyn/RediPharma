<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PageController extends Controller

{

    public function page()
    {
        $settings = Page::latest()->where('deleted_at', null)->get();
        return view('admin.pages.index', ['setting' => $settings]);
    }

    public function view($id)
    {
        $settings = Page::findOrFail($id);
        return view('admin.pages.view')->with('setting', $settings);
    }

    public function add(Request $req)
    {
        return view('admin.pages.add');
    }

    public function save(Request $req)
    {
       
        $page = new Page;
        $page->id = $req->id;
        $page->title = $req->title;
        $page->page_key = $req->page_key;
        $page->meta_key = $req->meta_key;
        $page->meta_description = $req->meta_description;
        $page->description = $req->description;
        $page->save();

        return redirect('admin/page')->with('success','Page created successfully!');
    }

    public function delete($id)
    {
        Page::where('id', '=', $id)->update(['deleted_at'=>Carbon::now()]);
        return redirect('admin/page')->with('error','Page is deleted successfully.');
    }

    public function archive() {

        $settings = Page::latest()->where('deleted_at','!=', null)->get();
        return view('admin.pages.archive', ['setting' => $settings]);

    }

    public function restore($id) {
        
        Page::where('id', '=', $id)->update(['deleted_at'=> null]);
        return back()->with('success','Product is restored successfully.');
        
    }


    public function edit($id)
    {
        $settings = Page::findOrFail($id);
        return view('admin.pages.edit')->with('setting', $settings);
    }

    public function update(Request $req)
    {
        $id = $req->id;
        $title = $req->title;
        $page_key = $req->page_key;
        $meta_key = $req->meta_key;
        $meta_description = $req->meta_description;
        $description = $req->description;

        Page::where('id', '=', $id)->update(['title' => $title, 'page_key' => $page_key, 'meta_key' => $meta_key, 'meta_description' => $meta_description,'description' => $description]);
        return redirect('admin/page')->with('success','Page is updated successfully.');
    }

}