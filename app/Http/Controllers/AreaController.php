<?php

namespace App\Http\Controllers;


use App\Models\Area;
use Illuminate\Http\Request;


class AreaController extends Controller
{
    public function index(){

         $areas=Area::all();
         return response()->json($areas);

        //$areas= Area::all();
        //return view('area.index',compact('areas'));
    }
    public function create(){
        return view('area.create');
    }
    public function store(Request $request){

           $request->validate([
            'name' => 'required|max:255',
        ]);

        $areas = Area::create($request->all());

        return response()->json($areas);

       // $area=area::create($request->all());

       // return redirect()->route('area.index');
    }
     public function show($id)
    {

        $areas = Area::findOrFail($id);
        return response()->json($areas);
        //$area = Area::find($id);
        //return view('area.show', compact('area'));
    }

     //Destroy
     public function destroy (Area $area){

         $category->delete();
        return $areas;
    }

      public function edit(Area $area){

        return view('area.edit',compact('area'));

      }

     //Update
    public function update(Request $request, Area $area){

         $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|max:255|unique:categories,slug,' . $areas->id,

        ]);

        $areas->update($request->all());

        return $category;


       // $area->update($request->all());
        //return redirect()->route('area.index');

      }

}
