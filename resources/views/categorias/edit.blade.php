@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{url('/categorias/'.$categoria->id)}}" method="post" enctype="multipart/form-data">
{{ csrf_field()}}
{{ method_field('PATCH')}}
@include('categorias.form',['Modo'=>'editar'])
</form>
</div>
@endsection