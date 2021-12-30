<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.Category.index');
    }

    public function searchCategory(Request $request){
//        if($request->ajax()){
//            $output="";
//            $list_categories = Category::where('name','LIKE','%'.$request->search."%")->get();
//            if($list_categories) {
//                foreach ($list_categories as $key => $cate) {
//                    <tr id="tr{{$cate->id}}">
//                        <td class="cell">#{{$cate->id}}</td>
//                        <td class="cell"><span class="truncate">{{$cate->name}}</span></td>
//                        <td class="cell">{{$cate->slug}}</td>
//                        <td class="cell">
//                            <a class="btn-sm app-btn-secondary" href="">
//                                <i class="fas fa-edit"></i>
//                            </a>
//                        </td>
//                        <td class="cell">
//                            <button class="deleteRecord btn" data-id="{{ $cate->id }}">
//                                <i class="fas fa-trash-alt"></i>
//                            </button>
//                        </td>
//                    </tr>
//                    $output .= `<tr></tr>`;
//                }
//            }else{
//                $output = "<td>No Data found</td>";
//            }
//            return Response($output);
//        }
    }

    public function allCategory(){
        $data = Category::orderBy('id','desc')->get();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'add_name' => 'required',
        ]);

        $category = new Category;
        $category->name = $request->add_name;
        $category->slug = Str::slug($request->add_name);
        $category->save();
        return response()->json('Add success');
    }

    public function show($id)
    {
        $category_by_id = Category::find($id);
        return Response($category_by_id);
    }


    public function edit(Category $category)
    {
        //
    }


    public function update(Request $request, $id)
    {
        dd("ol");
    }

    public function destroy($id)
    {
        Category::where('id', $id)->delete();
        return response()->json('Delete success');
    }
}
