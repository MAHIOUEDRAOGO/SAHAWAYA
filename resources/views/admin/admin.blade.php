@extends('header.header')

@section('content')

<main class="container">
  <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
    
    <div class="lh-1">
      <h1 class="h6 mb-0 text-white lh-1">Bootstrap</h1>
      <small>Since 2011</small>
    </div>
  </div>

  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">Documents recemments ajouter</h6>
   
   
    <div class="d-flex text-body-secondary pt-3">
      <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#6f42c1"/><text x="50%" y="50%" fill="#6f42c1" dy=".3em">32x32</text></svg>
      <p class="pb-3 mb-0 small lh-sm border-bottom">
        <strong class="d-block text-gray-dark">@username</strong>
        This user also gets some representative placeholder content. Maybe they did something interesting, and you really want to highlight this in the recent updates.
      </p>
    </div>
    <small class="d-block text-end mt-3">
      <a href="#">Mettre à jour</a>
    </small>
  </div>

  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="d-flex justify-content-between">
        <h3>Listes des documents</h3>
    <button class="btn btn-success">Ajouter</button>
    </div>
  <table class="table table-striped table-hover">
  <thead class="fw-bold">
    <td>Num</td>
    <td>ID</td>
    <td>Société</td>
    <td>  </td>
  </thead>
  <tbody>
  <tr>
    <td>1</td>
    <td>00322</td>
    <td>EBOMAF</td>
    <td>
        <div class="d-flex justify-content-end">
        <div>
        <button class="btn btn-danger">Supprimer</button>
        <button class="btn btn-primary">Modifier</button>
        </div>
        </div>
        
    </td>
  </tr>
  </tbody>
  
</table>
  </div>
</main>

@endsection