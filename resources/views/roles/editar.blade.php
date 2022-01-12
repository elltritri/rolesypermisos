@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Rol</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                    <strong>¡Revise los Campos!</strong>
                                    @foreach ($errors as $error)
                                        <span class="badge badge-danger">{{ $error }}</span>
                                    @endforeach
                                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                        <span>&times;</span>
                                    </button>
                                </div>
                            @endif

                                
                            {!! Form::model($role,['method'=>'PATCH','route'=>['roles.update',$role->id]]) !!}
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="Form-group">
                                        <label for="name">Nombre del Rol</label>
                                        {!! Form::text('name', null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="Form-group">
                                        <label for="name">Permisos del Rol</label>
                                        @foreach ($permission as $value)
                                            <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false) }}
                                            {{ $value->name }}</label>
                                        @endforeach
                                        
                                    </div>
                                </div>
                                
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>

                             
                            {!! Form::close(); !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

