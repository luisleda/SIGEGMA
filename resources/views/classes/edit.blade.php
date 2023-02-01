@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-start">
        @include('layouts.left-menu')
        <div class="col-xs-11 col-sm-11 col-md-11 col-lg-10 col-xl-10 col-xxl-10">
            <div class="row pt-2">
                <div class="col ps-4">
                    <h1 class="display-6 mb-3"><i class="bi bi-diagram-2"></i> Editar Cursos</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{url()->previous()}}">Cursos</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Editar Cursos</li>
                        </ol>
                    </nav>
                    @include('session-messages')
                    <div class="row">
                        <form class="col-6" action="{{route('school.class.update')}}" method="POST">
                            @csrf
                            <input type="hidden" name="session_id" value="{{$current_school_session_id}}">
                            <input type="hidden" name="class_id" value="{{$class_id}}">
                            <div class="mb-3">
                                <label for="class_name" class="form-label">Class Nome</label>
                                <input class="form-control" id="class_name" name="class_name" type="text" value="{{$schoolClass->class_name}}">
                            </div>
                            <div class="pb-3">
                            <select name="Área" aria-placeholder="Área">
                                <option value="Desenvolvimento Tencico-Gerencial">Desenvolvimento Técnico-Gerencial</option>
                                <option value="Desenvolvimento Pessoal">Desenvolvimento Pessoal e Institucional e Direitos Humanos</option>
                                <option value="Desenvolvimento Tecnico">Desenvolvimento Técnico</option>
                            </select>
                            </div>
                            <button type="submit" class="btn btn-outline-primary"><i class="bi bi-check2"></i> Salvar</button>
                        </form>
                    </div>
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </div>
</div>
@endsection