@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Clases grabadas</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">                        
                            @can('create-course')
                                <a class="btn btn-warning" href="{{ route('courses.create') }}">Nuevo</a>
                            @endcan
                
                            <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">                                     
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Titulo</th>
                                    <th style="color:#fff;">Video</th>
                                    <th style="color:#fff;">Tipo</th>                               
                                    <th style="color:#fff;">Acciones</th>                                                                   
                                </thead>
                                <tbody>
                                    @foreach ($courses as $course)
                                        <tr>
                                            <td style="display: none;">{{ $course->id }}</td>                                
                                            <td>{{ $course->title }}</td>
                                            <td>{{ $course->video }}</td>
                                            <td><h5><span class="badge badge-warning">{{ $course->tipo }}</span></h5></td>
                                            {{-- <td>{{ $course->description }}</td> --}}
                                            <td>
                                                <form action="{{ route('courses.destroy',$course->id) }}" method="POST">                                        
                                                    @can('edit-course')
                                                        <a class="btn btn-info" href="{{ route('courses.edit',$course->id) }}">Editar</a>
                                                    @endcan
                                                    @can('view-course')
                                                        <a class="btn btn-success" href="{{ route('courses.show',$course->id) }}">Ver</a>
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
                                {{-- @isset($courses->links())
                                    {!! $courses->links() !!}
                                @endisset --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script type="text/javascript">
        $('#description').summernote({
            height: 200
        });
    </script>
@endsection