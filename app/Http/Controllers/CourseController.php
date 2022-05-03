<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Auth;

class CourseController extends Controller
{
    function __construct()
    {
        $this->middleware('permission::view-course|create-course|edit-course|delete-course|read-course', ['only' => ['index']]);
        $this->middleware('permission::create-course' , ['only' => ['create','store']]);
        $this->middleware('permission::edit-course' , ['only' => ['edit', 'update']]);
        $this->middleware('permission::delete-course' , ['only' => ['delete','destroy']]);
        $this->middleware('permission::read-course' , ['only' => ['membresiauno','membresiauno']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hasRole('Estudiante'))
        {            
            $courses = Course::where('Tipo', '=', 'Clase')->get();
            foreach(Auth::user()->contenidoUsuarios as $contenido){
                $courses->push($contenido->curso);
            }
        }else{
            $courses = Course::all();
        }
        
        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
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
            'video' => 'required',
            'description' => 'required',
            'tipo' => 'required'
        ]);

        Course::create($request->all());
        return redirect()->route('courses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        request()->validate([
            'title' => 'required',
            'video' => 'required',
            'description' => 'required',
            'tipo' => 'required'
        ]);

        $course->update($request->all());

        return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function membresiauno()
    {
        $courses = Course::all();
        return view('courses.read', compact('courses'));
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function membresiados()
    {
        $courses = Course::all();
        return view('courses.read', compact('courses'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function membresiatres()
    {
        $courses = Course::all();
        return view('courses.read', compact('courses'));
    }
}
