@extends('template')

@section('title', 'Edition')

@section('content')
<form class="form-control mt-10 p-4" method="POST" action="{{ route('deliberation.update', $deliberation->id ) }}">
    @csrf
    @method('put')
    <div data-mdb-input-init class="form-outline mb-4">
        <h1 class="underline fw-bold mb-3">Edition de la Délibération N°{{$deliberation->id}} </h1>
      <label class="form-label fw-bold" for="date">Date :</label>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
              </svg>
        </span>
        <input type="date" class="form-control @error('dateDelib') is-invalid @enderror" name="dateDelib" value="{{ $deliberation->dateDelib }}">
      </div>
      @error('dateDelib')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
      @enderror

    <label class="form-label fw-bold" for="objet">Objet :</label>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
              </svg>
        </span>
        <input type="text" class="form-control @error('objet') is-invalid @enderror" name="objet" value="{{ $deliberation->objet }}">
      </div>
      @error('objet')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
      @enderror
    </div>

    <button data-mdb-ripple-init type="submit" class="btn btn-primary  fw-bold button my-4">Modifier</button>
</div>


</form>
@endsection
