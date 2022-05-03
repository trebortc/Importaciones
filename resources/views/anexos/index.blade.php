@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Anexos</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">                        
                            @can('create-anexo')
                                <a class="btn btn-warning" href="{{ route('anexos.create') }}">Nuevo</a>
                            @endcan
                
                            <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">                                     
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Titulo</th>
                                    <th style="color:#fff;">Link contenido</th>
                                    <th style="color:#fff;">Acciones</th>                                                                   
                                </thead>
                                <tbody>
                                    @foreach ($anexos as $anexo)
                                        <tr>
                                            <td style="display: none;">{{ $anexo->id }}</td>                                
                                            <td>{{ $anexo->title }}</td>
                                            <td>{{ $anexo->url }}</td>
                                            {{-- <td>{{ $anexo->description }}</td> --}}
                                            <td>
                                                <form action="{{ route('anexos.destroy',$anexo->id) }}" method="POST">                                        
                                                    @can('edit-anexo')
                                                        <a class="btn btn-info" href="{{ route('anexos.edit',$anexo->id) }}">Editar</a>
                                                    @endcan
                                                    @can('view-anexo')
                                                        <a class="btn btn-success" href="{{ route('anexos.show',$anexo->id) }}">Ver</a>
                                                    @endcan
                                                    @csrf
                                                    @method('DELETE')
                                                    @can('delete-anexo')
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
                                {!! $anexos->links() !!}
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