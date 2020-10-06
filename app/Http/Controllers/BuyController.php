<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Buy;
use Auth;
use App\Computer;
use App\Iphone;

class BuyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $user = Auth::guard('cust')->user();
        $user_id = $user->id;
        $buys = Buy::where('user_id','=',$user_id)->paginate(5);
        return view('buy.index', compact('buys'))
                  ->with('i', (request()->input('page',1) -1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buy.create');
        if (Auth::guard('cust')->check()){
            $comment->cust_id = Auth::id();
        }
    }

    public function buat($id)
    {
        $product= Computer::find($id);
        return view('buy.create')->with('product', $product);
    }

    public function buat2($id)
    {
        $product= Iphone::find($id);
        return view('buy.create')->with('product', $product);
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
          'nama' => 'required',
          'alamat' => 'required',
          'negeri' => 'required',
          'product' => 'required',
          'price' => 'required',
          'no_phone' => 'required'
   
        ]);

        Buy::create([
                'nama'=>$request->nama,
                'alamat'=>$request->alamat,
                'negeri'=>$request->negeri,
                'no_phone' => $request->no_phone,
                'product' => $request->product,
                'price' => $request->price,
                'user_id' => $request->user_id
        ]);
        return redirect()->route('buy.index')
                        ->with('success', 'Order Anda  Telah Berjaya!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buy = Buy::find($id);
        return view('buy.detail', compact('buy'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buy = Buy::find($id);
        return view('buy.edit', compact('buy'));
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
          'nama' => 'required',
          'alamat' => 'required',
          'negeri' => 'required',
          'no_phone' => 'required',
          'user_id' => $request->user_id
      ]);
      $buy = Buy::find($id);
      $buy->nama = $request->get('nama');
      $buy->alamat = $request->get('alamat');
      $buy->negeri = $request->get('negeri');
      $buy->no_phone = $request->get('no_phone');
      $buy->user_id = $request->get('user_id');


      
      $buy->save();
      return redirect()->route('buy.index')
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
        $buy = Buy::find($id);
        $buy->delete();
        return redirect()->route('custorder')
                        ->with('success', 'buy Order deleted successfully');
    }


    public function custorder()
    {
        $buys = Buy::latest()->paginate(5);
        return view('buy.custorder', compact('buys'))
                  ->with('i', (request()->input('page',1) -1)*5);
    }

    public function homepage()
    {
        $buys = Buy::latest()->paginate(5);
        return view('buy.homepage', compact('buys'))
                  ->with('i', (request()->input('page',1) -1)*5);
    }

}
