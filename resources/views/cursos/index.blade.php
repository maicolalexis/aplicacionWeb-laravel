@extends('Layouts.app')

@section('titulo', 'Listado de cursos')

@section('contenido')
    <center>
        <h3>Listado de cursos disponibles</h3>
    </center>
    {{-- foreach es un ciclo especial para arrays
    recorderis: existen ciclos como while, for, do while, foreach --}}
    <div class="row">
        @foreach ($cursito as $co)
            {{-- para llamar información de php basta con interpolar las variables
usando la doble llave --}}


            <div class="col">
                <div class="card" style="width: 18rem;">
                    <center>
                        <img src="{{ Storage::url($co->img) }}" class="card-img-top" alt="..." style="width: 50%;">
                    </center>
                    <div class="card-body">
                        <li class="list-group-item">{{ $co->nombre }}</li>

                        <br>
                        {{--se necesita el id para un registro en particular--}}
                        <a href="/cursos/{{$co->id}}" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>

            <br>
        @endforeach
    </div>
@endsection
