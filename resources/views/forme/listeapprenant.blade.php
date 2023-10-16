@extends('template')

@section('page-content')
<section>
<div class="container p-4">
    <div class="card-container w-100">
      <h2 class='mb-3 text-center'>LISTE DES APPRENANT.E.S</h2>
      <table id="dtBasicExample" class="table table-striped table-hover pt-3" width="100%">
        <thead>
          <tr>
            <th>Numero</th>
            <th class="stud_Name">Nom<span class="search-box-container"><input type="text" id="search-box-name" placeholder="Search by name..."></span></th>
            <th class="w-10">Prenom<span class="search-box-container"><input type="text" id="search-box-rollno" placeholder="Search by rollno..."></span></th>
            <th class="w-10">Email</th>
            <th>Status compte</th>
            <th>Action</th>
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
                  @if ($apprenant->status == 1)
                  <a href="{{ route('apprenants.deactivate', $apprenant) }}" class="btn btn-danger"><i class="fa fa-times-circle"></i></a>
                  @else
                  <a href="{{ route('apprenants.activate', $apprenant) }}" class="btn btn-success"><i class="fa fa-check-circle"></i></a>
                  @endif
                </td>
                <td>
                    <a href="#" class="btn btn-secondary"><i class="fa fa-info"></i></a>
                    <a href="#" class="btn btn-info d-iniline"><i class="fa fa-pencil"></i></a>
                    <a href="#" class="btn btn-danger d-inline" onclick="return confirm('voulez-vous vraiment supprimer ce produit?')"><i class="fa fa-trash"></i></a>
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
