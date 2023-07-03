@extends('layouts.app')

@section('content')
<div class="section py-5">
    <div class="container mt-5 mb-5 py-5" style="background-color: #e6ae2a;">
        <form action="{{ route('admin.update-juego', optional($juego)->id) }}" method="POST">
            <div class="row mb-4">
                <div class="form-outline">
                    <input type="text" id="form6Example1" class="form-control" value="{{ optional($juego)->nombre }}" />
                    <label class="form-label" for="form6Example1">Nombre de juego</label>
                </div>
            </div>

            <div class="form-outline mb-4">
                <input type="text" id="form6Example3" class="form-control" value="{{ optional($juego)->descripcion }}" />
                <label class="form-label" for="form6Example3">Descripcion</label>
            </div>

            <div class="form-outline mb-4">
                <input type="number" id="form6Example4" class="form-control" value="{{ optional($juego)->precio }}" />
                <label class="form-label" for="form6Example4">Precio</label>
            </div>

            <!-- Submit button -->
            <button type="" class="btn btn-primary btn-block mb-4">Place order</button>
            <a class="main-button" href="{{ route('admin.juegos') }}">Regresar</a>
        </form>

        <!-- Dumping juego object -->
        <pre>
            <?php echo "el nombre del juego es:" . optional($juego)->nombre  ?>
        </pre>
    </div>
</div>



@endsection