@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h5 class="page__heading">{{ $course->tipo }}</h5>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">                                            
                        <div class="embed-responsive embed-responsive-16by9">
                            {{-- <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe> --}}
                            {{-- <iframe src="https://drive.google.com/file/d/1VgezKc6h74XYiHtYJWTjnZEQlPel7D3Q/preview" width="640" height="480" allow="autoplay"></iframe> --}}
                            <iframe src="{{ $course->video }}" allow="autoplay"></iframe>
                        </div>
                        {{-- <img src="..." class="card-img-top" alt="..."> --}}
                        <div class="card-body">                                                
                            <h4 class="card-title">{{ $course->title }}</h4>
                            {{-- <h4 class="card-title">{{ $course->title }}&nbsp;<span class="badge badge-primary">{{ $course->tipo }}</span></h4> --}}
                            {{-- <p class="card-text" >{{ $course->description }}</p> --}}
                            <textarea class="card-text" name="description" id="description">{{ $course->description }}</textarea>                              
                            <br/>
                            {{-- <h5 class="card-title">Anexo</h5>
                            <a href="{{ URL::to('/') }}/doc/guia_inicial.docx">Descargar guia de contacto inicial</a> --}}
                            {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
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