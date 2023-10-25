@extends('template')

@section('page-content')
<section>
<div class="container p-4">
    <div class="card-container w-100">
      <h2 class='mb-3 text-center'>Inscriptions en attente</h2>
      <table id="dtBasicExample" class="table table-striped table-hover pt-3" width="100%">
        <thead>
          <tr>
            <th>Numero</th>
            <th class="stud_Name">Nom<span class="search-box-container"><input type="text" id="search-box-name" placeholder="Search by name..."></span></th>
            <th class="w-10">Prenom<span class="search-box-container"><input type="text" id="search-box-rollno" placeholder="Search by rollno..."></span></th>
            <th class="w-10">Email</th>
            <th>Status compte</th>

          </tr>
        </thead>
        <tbody>
    @php
        $compteur = 1;
    @endphp
    @foreach ($apprenant as $apprenant)
        <tr>
            <td>{{ $compteur }}</td>
            <td>{{ $apprenant->nom }}</td>
            <td>{{ $apprenant->prenom }}</td>
            <td>{{ $apprenant->email }}</td>
            <td>
                <a href="{{ route('valider_inscription', ['apprenantId' => $apprenant->id]) }}" class="btn btn-success">Valider Inscription</a>
            </td>
        </tr>
        @php
            $compteur++;
        @endphp
    @endforeach
</tbody>
      </table>
    </div>
  </div>
</section>
@endsection
