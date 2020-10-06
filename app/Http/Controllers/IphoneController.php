<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Iphone;

class IphoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    



    public function index()
    {
        $iphones = Iphone::latest()->paginate(10);
        return view('iphone.index', compact('iphones'))
                  ->with('i', (request()->input('page',1) -1)*10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('iphone.create');
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

        Iphone::create([
                'image'=>$imageName,
                'about'=>$request->about,
                'price'=>$request->price,
                'desc'=>$request->desc
        ]);
        return redirect()->route('iphone.index')
                        ->with('success', 'new iphone created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $iphone = Iphone::find($id);
        return view('iphone.detail', compact('iphone'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $iphone = Iphone::find($id);
        return view('iphone.edit', compact('iphone'));
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
      $iphone = Iphone::find($id);
      $iphone->about = $request->get('about');
      $iphone->price = $request->get('price');
      $iphone->desc = $request->get('desc');
      
      if($request->hasfile('image')){
      $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);
      $iphone->image = $imageName;
      }
      
      $iphone->save();
      return redirect()->route('iphone.index')
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
        $iphone = Iphone::find($id);
        $iphone->delete();
        return redirect()->route('iphone.index')
                        ->with('success', 'iphone siswa deleted successfully');
    }

    public function iphonecust()
    {
        $iphones = Iphone::latest()->paginate(10);
        return view('iphone.iphonecust', compact('iphones'))
                  ->with('i', (request()->input('page',1) -1)*10);
    }


}
