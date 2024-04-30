@extends('layouts.tmp')

@section('title', 'Délibération')

@section('content')
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Délibération</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Liste des délibérations</button>
    </li>

  </ul>

  @php

        $id = DB::table('deliberations')->select('id')->latest()->value('id');
        $year = date('Y');

        if($id == 0){
            $id = 1;
        } else { }
        $numDelib = $year."-".$id."/RID/CR/DGA"

  @endphp


  <div class="tab-content m-4" id="myTabContent">
    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
        <form method="post" action="">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            @csrf

            <h1 class="fw-bold mb-3"> Délibération : N° {{ $numDelib }}</h1>
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label fw-bold" for="date">Date :</label>
                <input type="date" name="dateDelib" id="date" class="form-control @error('dateDelib') is-invalid @enderror" >
                @error('dateDelib')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
              <label class="form-label fw-bold" for="Objet">Objet :</label>
              <textarea name="objet" id="objet" cols="5" rows="5" class="form-control @error('objet') is-invalid @enderror"></textarea>
                @error('objet')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <!-- Submit button -->
            <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block fw-bold mb-4">Envoyer</button>
        </form>
    </div>
    <div class="tab-pane fade m-4" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">

         <div class="row">
            <div class="col-md-12">
                <div class="card mt-2">
                    <div class="card-header">
                        <div class="card-body">
                            <table class="table table-bordered ">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Objet</th>
                                        <th style="text-align: center;" colspan="2">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($deliberations as $deliberation)
                                        <tr>
                                            <td>{{$deliberation->dateDelib   }}
                                            </td>
                                            <td>
                                                {{ $deliberation->objet}}
                                            </td>
                                            <td>
                                                <a href="{{ route('deliberation.editDelib', $deliberation->id) }}" class="btn btn-success w-full fw-bold">
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
