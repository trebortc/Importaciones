@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h5 class="page__heading">Anexo</h5>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">                                            
                        <div class="card-body">                                                
                            <h4 class="card-title">{{ $anexo->title }}</h4>                        
                            <textarea class="card-text" name="description" id="description">
                                {{ $anexo->description }}                                
                            </textarea>
                            <a class="nav-link" href="{{ $anexo->url }}" target="_blank">
                                <i class=" fas fa-file"></i><span>Click para obtener recurso</span>
                            </a>
                            <br/>
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
            height: 50
        });
    </script>
@endsection