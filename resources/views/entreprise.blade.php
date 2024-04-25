@extends('layouts.tmp')

@section('title', 'Entreprise')

@section('content')
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Entreprise</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Liste des entreprises</button>
    </li>

  </ul>
  <div class="tab-content m-5" id="myTabContent">
    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
        <form method="post" action="">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            @csrf

            <div data-mdb-input-init class="form-outline mb-4">
              <label class="form-label fw-bold" for="Nom">Nom :</label>
              <input type="text" name="nom" id="nom" class="form-control @error('nom') is-invalid @enderror">
              @error('nom')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
              @enderror
            </div>

            
            <!-- Submit button -->
            <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4 fw-bold">Envoyer</button>
        </form>
    </div>
    <div class="tab-pane fade m-3" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-body">
                            <table class="table table-bordered ">
                                <thead>
                                    <tr>
                                        <th style="text-align:center;">Entreprises</th>
                                        <th colspan="2" style="text-align:center;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($entreprises as $entreprise)
                                        <tr @if ($entreprise->deleted_at)
                                            class="table-secondary p-1"

                                        @endif>
                                            <td>{{ strtoupper($entreprise->nom)   }}
                                            </td>
                                            <td>
                                                @if ($entreprise->deleted_at)
                                                <form action="{{ route('entreprise.restore', $entreprise->id) }}" method="post">
                                                @csrf
                                                @method('put')
                                                <button class="btn btn-warning fw-bold w-full" type="submit">Restaurer</button>
                                                </form>
                                                @else
                                                <a href="{{ route('entreprise.edit', $entreprise->id) }}" class="btn btn-success w-full fw-bold">
                                                     Modifier
                                                </a>
                                                @endif
                                            </td>
                                            <td>
                                                <form action="{{ route($entreprise->deleted_at? 'entreprise.force.destroy': 'entreprise.destroy', $entreprise->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"  class="btn btn-danger w-full fw-bold">Supprimer</button>
                                            </td>
                                            </form>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection
