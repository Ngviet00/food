<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class SlideController extends Controller
{
    public function index()
    {
        $list_slides = Slide::orderBy('id','desc')->get();
        return view('admin.Slide.index',compact('list_slides'));
    }

    public function create()
    {
        return view('admin.Slide.create');
    }

    public function store(Request $request)
    {

        request()->validate([
            'image' => 'required',
        ]);

        if($request->hasFile('image')){
            $name = time().$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public', $name);
            $path = '/'.str_replace("public","storage",$path);
        }
        $slide = new Slide;
        $slide->image = $path;
        $slide->save();
        return redirect()->route('slide.index')->with('msg','success');
    }

    public function update(Request $request,$id)
    {
        $slide = Slide::findOrFail($id);
        $slide->status = $request->status;
        $slide->save();
        return response()->json(['success'=>'status changed successfully']);
    }

    public function destroy($id)
    {
        
        $slide = Slide::findOrFail($id);
        File::delete(public_path($slide->image));
        Slide::destroy($slide->id);
        return redirect()
                ->route('slide.index')
                ->with('success','Slide deleted successfully');
    }
}
