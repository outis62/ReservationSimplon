@extends('template')

@section('page-content')
<section>
<div class="container p-4">
    <div class="card-container w-100">
      <h2 class='mb-3 text-center'>LISTE DES RESERVATIONS</h2>
      <table id="dtBasicExample" class="table table-striped table-hover pt-3" width="100%">
        <thead>
          <tr>
            <th>Numero</th>
            <th>Nom apprenant.e.s</th>
            <th class="stud_Name">Jour Reservé<span class="search-box-container"><input type="text" id="search-box-name" placeholder="Search by name..."></span></th>
            <th class="w-10">Heure reservée<span class="search-box-container"><input type="text" id="search-box-rollno" placeholder="Search by rollno..."></span></th>
            <th class="w-10">Status reservation</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        @php
            $compteur = 1;
        @endphp
        @foreach ($reservation as $reservation)
            <tr>
                <td>{{ $compteur }}</td>
                <td>{{ $reservation->apprenant->nom }} {{ $reservation->apprenant->prenom }}</td>
                <td>{{ $reservation->jour_reservation }}</td>
                <td>{{ $reservation->heure_reservation }}</td>
                <td>
                  @if ($reservation->status == 1)
                  <a href="{{ route('reservations.deactivate', $reservation) }}" class="btn btn-danger"><i class="fa fa-times-circle"></i></a>
                  @else
                  <a href="{{ route('reservations.activate', $reservation) }}" class="btn btn-success"><i class="fa fa-check-circle"></i></a>
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
