<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    public function index()  {
        $computers=Computer::all();

        return view('computer.index', compact('computers'));
    }

    public function create() {
        return view('computer.create');
    }
    public function store(Request $request)  {

        $file = $request->file("urlImage");
        $nombreArchivo = "img_" . time() . "." . $file->guessExtension();
        $request->file('urlImage')->storeAs('media', $nombreArchivo, 'public');

        $procesado=$request->except('urlImage');
        $procesado['urlImage']=$nombreArchivo;


        $computer=Computer::create($procesado);


        return redirect()->route('computer.index');
    }
    public function show(Computer $computer)  {
        return view('computer.show',compact('computer'));
    }

    public function update(Request $request,Computer $computer)  {
        $computer->update($request->all());

        return redirect()->route('computer.index');
    }

    public function edit(Computer $computer) {
        return view('computer.edit',compact('computer'));
    }

    public function destroy(Computer $computer) {
        $computer->delete();
        return redirect()->route('computer.index');
    }
}
