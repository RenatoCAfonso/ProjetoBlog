<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postagens = Blog::orderBy('created_at', 'desc')->paginate(10);
        return view('index', compact('postagens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titulo' => ['required'],
            'texto' => ['required'],
        ]);

        $n = new Blog();
        $n->titulo = $request->input("titulo");
        $n->texto = $request->input("texto");
        $n->save();
        return redirect()->route('postagens');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat = Blog::find($id);
        if(isset($cat)) {
            return view('editar', compact('cat'));
        }
        return redirect('/');
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

        $validatedData = $request->validate([
            'titulo' => ['required'],
            'texto' => ['required'],
        ]);

        $cat = Blog::find($id);
        if(isset($cat)) {
            $cat->titulo = $request->input('titulo');
            $cat->texto = $request->input('texto');
            $cat->save();
        }
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Blog::find($id);
        if(isset($cat)) {
            $cat->delete();
        }
        return redirect('/');
    }
}
