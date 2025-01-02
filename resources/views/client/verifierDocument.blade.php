@extends('header.header')

@section('verifierDocument')
<div class="mt-5  col-6 ">
  <div class="d-flex align-items-center p-3 my-3 text-black bg-purple rounded shadow-sm justify-content-center">
  <form class="">
    <fieldset enabled>
      <legend>Remplissez les informations ci-dessous</legend>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Nom du fournisseur</label>
        <input type="text" id="disabledTextInput" class="form-control" placeholder="Nom du fournisseur" required>
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">N° du facture</label>
        <input type="text" id="disabledTextInput" class="form-control" placeholder="N° du facture"required>
      </div>
      
      
     
      
      <button type="submit" class="btn btn-primary">Envoyer</button>
    </fieldset>
  </form>
  </div>
</div>

@endsection