@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Cursos</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">                                        
                            <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">                                     
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Titulo</th>
                                    <th style="color:#fff;">Video</th>
                                    <th style="color:#fff;">Descripción</th>                                    
                                    <th style="color:#fff;">Acciones</th>                                                                   
                                </thead>
                                <tbody>
                                    @foreach ($courses as $course)
                                        <tr>
                                            <td style="display: none;">{{ $course->id }}</td>                                
                                            <td>{{ $course->title }}</td>
                                            <td>{{ $course->video }}</td>
                                            <td>{{ $course->description }}</td>
                                            <td>
                                                <form action="{{ route('courses.destroy',$course->id) }}" method="POST">                                        
                                                    @can('edit-course')
                                                        <a class="btn btn-info" href="{{ route('courses.edit',$course->id) }}">Editar</a>
                                                    @endcan

                                                    @csrf
                                                    @method('DELETE')
                                                    @can('delete-course')
                                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                                    @endcan
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <!-- Ubicamos la paginacion a la derecha -->
                            <div class="pagination justify-content-end">
                                {!! $courses->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection