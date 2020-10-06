<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Computer;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $computers = Computer::latest()->paginate(10);
        return view('computer.index', compact('computers'))
                  ->with('i', (request()->input('page',1) -1)*10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('computer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'image' => 'required|image|max:2048',
          'about' => 'required',
          'price' => 'required',
          'desc' => 'required',
        ]);

        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);

        Computer::create([
                'image'=>$imageName,
                'about'=>$request->about,
                'price'=>$request->price,
                'desc'=>$request->desc
        ]);
        return redirect()->route('computer.index')
                        ->with('success', 'new computer created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $computer = Computer::find($id);
        return view('computer.detail', compact('computer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $computer = Computer::find($id);
        return view('computer.edit', compact('computer'));
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
      $request->validate([
          'about' => 'required',
          'price' => 'required',
          'desc' => 'required',
      ]);
      $computer = Computer::find($id);
      $computer->about = $request->get('about');
      $computer->price = $request->get('price');
      $computer->desc = $request->get('desc');
      
      if($request->hasfile('image')){
      $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);
      $computer->image = $imageName;
      }
      
      $computer->save();
      return redirect()->route('computer.index')
                      ->with('success', 'Biodata siswa updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $computer = Computer::find($id);
        $computer->delete();
        return redirect()->route('computer.index')
                        ->with('success', 'computer siswa deleted successfully');
    }

    public function computercust()
    {
        $computers = Computer::latest()->paginate(10);
        return view('computer.computercust', compact('computers'))
                  ->with('i', (request()->input('page',1) -1)*10);
    }


}
