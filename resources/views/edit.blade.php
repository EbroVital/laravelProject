@extends('layouts.tmp')

@section('title', 'Edition')

@section('content')
<form  method="POST" action="{{ route('entreprise.update', $entreprise->id ) }}">
    @csrf
    @method('put')
    <div data-mdb-input-init class="form-outline mb-4">
        <h1 class="underline mb-3">Edition</h1>
      <label class="form-label fw-bold" for="Nom">Nom :</label>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
              </svg>
        </span>
        <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ $entreprise->nom}}">
      </div>
      @error('nom')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
      @enderror
    </div>

    <!-- Submit button -->
    <button data-mdb-ripple-init type="submit" class="btn btn-primary button mb-4 fw-bold my-4">Modifier</button>
</form>
@endsection
