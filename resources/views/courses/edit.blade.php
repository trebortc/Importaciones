@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h5 class="page__heading">EDITAR CURSO</h5>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">                            
                   
                        @if ($errors->any())                                                
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>                        
                                @foreach ($errors->all() as $error)                                    
                                    <span class="badge badge-danger">{{ $error }}</span>
                                @endforeach                        
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif


                    <form action="{{ route('courses.update',$course->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="title">Título</label>
                                   <input type="text" name="title" class="form-control" value="{{ $course->title }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="video">Video</label>
                                   <input type="text" name="video" class="form-control" value="{{ $course->video }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">                                                
                                <div class="form-floating">
                                    <label for="description">Descripción</label>
                                    <textarea class="form-control" name="description" id="description">{{ $course->description }}</textarea>                                
                                </div>                                                      
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">                                                
                                <div class="form-group">
                                    <label for="tipo">Tipo contenido</label>
                                    <select class="form-control" value="{{ $course->tipo }}" name="tipo">
                                        <option value="Clase">Clase</option>        
                                        <option value="Asesoria">Asesoria</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">                                                
                                <div class="form-group">
                                    <label for="fecha_inicio">Fecha inicio:</label>
                                    <input type="date" name="fecha_inicio" class="form-control" value="{{ $course->fecha_inicio }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">                                                
                                <div class="form-group">
                                    <label for="fecha_fin">Fecha fin:</label>
                                    <input type="date" name="fecha_fin" class="form-control" value="{{ $course->fecha_fin }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12"><br/>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </form>

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