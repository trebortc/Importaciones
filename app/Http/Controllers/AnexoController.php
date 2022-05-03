<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anexo;

class AnexoController extends Controller
{
    function __construct()
    {
        // $this->middleware('permission::view-anexo|create-anexo|edit-anexo|delete-anexo|read-anexo', ['only' => ['index']]);
        // $this->middleware('permission::create-anexo', ['only' => ['create','store']]);
        // $this->middleware('permission::edit-anexo', ['only' => ['edit', 'update']]);
        // $this->middleware('permission::delete-anexo', ['only' => ['delete','destroy']]);
        // $this->middleware('permission::view-anexo', ['only' => ['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anexos = Anexo::paginate(5);
        return view('anexos.index', compact('anexos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anexos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'url' => 'required',
            'description' => 'required'
        ]);

        Anexo::create($request->all());
        return redirect()->route('anexos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Anexo $anexo)
    {
        return view('anexos.show', compact('anexo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Anexo $anexo)
    {
        return view('anexos.edit', compact('anexo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anexo $anexo)
    {
        request()->validate([
            'title' => 'required',
            'url' => 'required',
            'description' => 'required'
        ]);

        $blog->update($request->all());

        return redirect()->route('anexos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anexo $anexo)
    {
        $anexo->delete();
        return redirect()->route('anexos.index');
    }
}
