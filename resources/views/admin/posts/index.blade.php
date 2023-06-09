@extends('adminlte::page')

@section('title', 'EWAP Panel administrador')

@section('content_header')
    <a href="{{ route('admin.posts.create') }}" class="btn btn-success btn-sm float-right">Nuevo Post</a>

    <h1>EWAP Panel Administrador</h1>
    <p>Listado de clases</p>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>
                {{ session('info') }}
            </strong>
        </div>
    @endif

    @livewire('admin.posts-index')
@stop

@section('css')

@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
