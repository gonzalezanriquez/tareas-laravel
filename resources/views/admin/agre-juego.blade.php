@extends('layouts.app')

@section('content')

<div class="section py-5">
    <div class="container mt-5 mb-5 py-5" style="background-color: #e6ae2a;">

        <form>
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
                <div class="form-outline">
                    <input type="text" id="form6Example1" class="form-control" />
                    <label class="form-label" for="form6Example1">Nombre</label>
                </div>
            </div>

            <!-- Text input -->
            <!-- Message input -->
            <div class="form-outline mb-4">
                <textarea class="form-control" id="form6Example7" rows="4"></textarea>
                <label class="form-label" for="form6Example7">Descripcion del juego</label>
            </div>

            <!-- Number input -->
            <div class="form-outline mb-4">
                <input type="number" id="form6Example6" class="form-control" />
                <label class="form-label" for="form6Example6">Precio</label>
            </div>

            <select class="form-select" aria-label="Default select example">
                <option value="">Seleccione una categoria</option>
                @foreach($categorias as $cat)
                <option value="{{ $cat->id }}">{{ $cat->nombre }}</option>
                @endforeach
            </select>


            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Place order</button>
            <div class="main-button">
                <a class="main-button" href="{{ route('admin.juegos') }}">Regresar</a>
            </div>

        </form>

    </div>
</div>


@endsection