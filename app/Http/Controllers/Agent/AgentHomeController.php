<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Clothes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AgentHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clothes = Clothes::where('agent_id',auth()->user()->id)->get();
        return view('agent.dashboard',['clothes'=>$clothes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = Category::all();
        return view('agent.add-clothes',['category'=>$category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $file = $request->file('gambar');
        
        Storage::putFileAs('public/clothes-images',$file,$file->getClientOriginalName());
        $path = 'clothes-images/'.$file->getClientOriginalName();

        Clothes::create([
            'agent_id' => auth()->user()->id,
            'category_id' => $request->kategori,
            'name' => $request->nama,
            'size' => $request->size,
            'price' => $request->harga,
            'picture_path' => $path,
            'description' => $request->deskripsi,
            'qty' => $request->stock,
            'rating' => 0,
        ]);

        return redirect(route('agent-home'))->with('success','Clothes added successfully :)');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $param['clothes'] = Clothes::where('id',$id)->first();
        $param['category'] = Category::all();
        return view('agent.edit-clothes')->with($param);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // ini branch master (yang gua update lagi)
    }
}
