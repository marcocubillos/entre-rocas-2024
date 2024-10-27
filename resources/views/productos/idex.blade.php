@extends('layouts.app')

@section("titulo", "pagina principal")

@section("contenido")

    @foreach($productos as $producto)
    <div class="card bg-base-100 image-full w-96 shadow-xl">
        <figure>
          <img
            src="https://picsum.photos/id/{{ $producto->id }}/240"
            alt="{{ $producto->nombre }}" />
        </figure>
        <div class="card-body">
          <h2 class="card-title">{{ $producto->nombre }}</h2>
          <p>{{ $producto->descripcion }}</p>
          <div class="card-actions justify-end">
            <button class="btn btn-primary">Buy Now</button>
          </div>
        </div>
      </div>
    @endforeach
@endsection