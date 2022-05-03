<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContenidoUsuario;
use App\Models\Course;
use App\Models\User;

class AsesoriaController extends Controller
{
    function __construct()
    {
        $this->middleware('permission::view-asesoria|create-asesoria|edit-asesoria|delete-asesoria',['only' => ['index']]);
        $this->middleware('permission::view-asesoria' , ['only' => ['view','view']]);
        $this->middleware('permission::create-asesoria' , ['only' => ['create','store']]);
        $this->middleware('permission::edit-asesoria' , ['only' => ['edit', 'update']]);
        $this->middleware('permission::delete-asesoria' , ['only' => ['delete','destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asesorias = ContenidoUsuario::paginate(5);
        return view('asesorias.index', compact('asesorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos = Course::where('tipo', '=', 'Asesoria')->get();
        $usuarios =  User::role('Estudiante')->pluck('name','id')->toArray();
        return view('asesorias.create', compact(['cursos', 'usuarios']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'usuarios' => 'required', 
            'cursos' => 'required'
        ]);

        foreach ($request->input('cursos') as $curso) {
            ContenidoUsuario::create(
                [
                    'user_id' => $request->input('usuarios')[0],
                    'course_id' => $curso
                ]
            );
        }
                
        return redirect()->route('asesorias.index');
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
        //
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
    public function destroy(ContenidoUsuario $asesoria)
    {
        $course->delete();
        return redirect()->route('courses.index');
    }
}
