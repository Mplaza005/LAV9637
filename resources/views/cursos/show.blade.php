@extends('layouts.plantilla')

@section('content')

<h1>Hola desde show</h1>

{{$curso}}

<iframe src="{{ 'http://localhost/LAV9637/public/storage/imagenes/' . $curso->urlPdf }}"  frameborder="0"></iframe>


@endsection
