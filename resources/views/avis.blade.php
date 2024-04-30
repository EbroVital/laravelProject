@extends('layouts.tmp')

@section('title', 'Avis de bureau')

@section('content')

<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Avis de bureau</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Liste des avis de bureau</button>
    </li>

</ul>

    @php

        $id = DB::table('avis_bureaus')->select('id')->latest()->value('id');
        $year = date('Y');

        if($id == 0){
            $id = 1;
        } else { }
        $numAvis = $year."-".$id."/RID/CR/DGA"

    @endphp

  <div class="tab-content m-5" id="myTabContent">
    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
        <form method="post" action="">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            @csrf
            <h1 class="fw-bold mb-3"> Avis de bureau : N° {{ $numAvis }}</h1>
            <div class="row mb-4">
              <div class="col">
                <div data-mdb-input-init class="form-outline">
                  <label class="form-label fw-bold" for="Date">Date :</label>
                  <input type="date" name="date" class="form-control @error('date') is-invalid @enderror" value="{{ old('date') }}"/>
                </div>
                @error('date')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="col">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label fw-bold" for="Montant">Montant :</label>
                  <input type="number" name="montant" class="form-control @error('montant') is-invalid @enderror" value="{{ old('montant') }}" />
                </div>
                @error('montant')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
              </div>
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
              <label class="form-label fw-bold" for="Objet">Objet :</label>
              <textarea name="objet" cols="30" rows="5" class="form-control @error('objet') is-invalid @enderror">{{ old('objet') }}</textarea>
              @error('objet')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
              @enderror
            </div>

            <!-- Submit button -->
            <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4 fw-bold">Envoyer</button>
        </form>
    </div>
    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
        <div class="row">
            <div class="col-md-14">
                <div class="card">
                    <div class="card-header">
                        <div class="card-body">
                            <table class="table table-bordered ">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Montant</th>
                                        <th>Libellé</th>
                                        <th style="text-align: center;" colspan="2">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($avisB as $avis)
                                        <tr>
                                            <td>{{$avis->dateAvis }}
                                            </td>
                                            <td>
                                                {{ $avis->montant}}
                                            </td>
                                            <td>
                                                {{ $avis->libelle}}
                                            </td>
                                            <td>
                                                <a href="{{ route('avis.editAvis', $avis->id)}}" class="btn btn-success w-full fw-bold">
                                                     Modifier
                                                </a>

                                            </td>

                                            <td>
                                                <form action="#" method="post">
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
