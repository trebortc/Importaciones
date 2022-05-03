@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h5 class="page__heading">ADMINISTRAR ASESORÍAS</h5>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <a class="btn btn-warning" href="{{ route('asesorias.create')}}">Nuevo</a>
                            <table class="table table-striped mt-2">
                                <thead style="background-color: #6777ef;">
                                    <th style="display:none;">ID</th>
                                    <th style="color:#fff;">Nombre</th>
                                    <th style="color:#fff;">Asesorias</th>
                                    <th style="color:#fff;">Acciones</th>
                                </thead>    
                                <tbody>
                                    @foreach ($asesorias as $asesoria)
                                        <tr>
                                            <td style="display: none;">{{$asesoria->id}}</td>
                                            <td>{{ $asesoria->usuario->name }}</td>
                                            <td>{{ $asesoria->curso->title }}</td>
                                            <td>
                                                {{-- <a class="btn btn-info" href="{{ route('asesorias.edit', $asesoria->id) }}">Editar</a> --}}
                                                {!! Form::open(['method'=>'DELETE', 'route'=>['asesorias.destroy', $asesoria->id], 'style'=>'display:inline']) !!}
                                                    {!! Form::submit('Borrar', ['class'=>'btn btn-danger']) !!}
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>    
                            </table>
                            <div class="pagination justify-content-end">
                                {!! $asesorias->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

