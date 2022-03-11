@extends('Layouts.app')

@section('titulo')

@section('contenido')

<div class="col">
    <div class="card" style="width: 18rem;">
        <img src="{{ Storage::url($cursito->img) }}" class="card-img-top" alt="..." style="width: 50%;">
        <div class="card-body">
            <p class="card-text">{{ $cursito->description }}</p>
        </div>
        <a href="/cursos/{{$cursito->id}}/edit" class="btn btn-primary">Editar Curso</a>
    </div>
</div>

@endsection
