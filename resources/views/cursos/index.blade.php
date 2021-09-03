@extends('layouts.app')

@section('contenido')
<h1>Cursos</h1>
<div class="accordion" id="accordionExample">
    @foreach ( $cursos as $curso)
    <div class="accordion-item">
      <h2 class="accordion-header" id="{{ $curso->id }}">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acordion{{ $curso->id }}" aria-expanded="false" aria-controls="collapseOne">
          {{ $curso->name }}
        </button>
      </h2>
      <div id="acordion{{ $curso->id }}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
        <div class="accordion-body">
          <strong>{{ $curso->categoria }}</strong>{{ $curso->description }}
        </div>
      </div>
    </div>
    @endforeach
</div>

<div class="d-flex justify-content-center mt-2">
    {!! $cursos->appends(['sort' => 'science-stream'])->links() !!}
</div>
@endsection
