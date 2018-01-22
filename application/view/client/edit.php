<?php $client = $layout->getVar('client'); ?>
<form action="/client/save" method="post">
  <input type="hidden" value="<?php echo $client['id'] ?>" name="id">
  <div class="form-group row">
    <label for="nom" class="col-2 col-form-label">Nom</label>
    <div class="col-10">
      <input class="form-control" type="text" value="<?php echo $client['nom'] ?>" name="nom" id="nom">
    </div>
  </div>
  <div class="form-group row">
    <label for="prenom" class="col-2 col-form-label">Prénom</label>
    <div class="col-10">
      <input class="form-control" type="text" value="<?php echo $client['prenom'] ?>" name="prenom" id="prenom">
    </div>
  </div>
  <div class="form-group row">
    <label for="date_de_naissance" class="col-2 col-form-label">Date de naissance</label>
    <div class="col-10">
      <input class="form-control" type="date" value="<?php echo $client['date_de_naissance'] ?>" name="date_de_naissance" id="date_de_naissance">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-2 col-form-label">Email</label>
    <div class="col-10">
      <input class="form-control" type="email" value="<?php echo $client['email'] ?>" name="email" id="email">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-6">
      <a href="/client">
        <button type="button" class="btn btn-info">Retour</button>
      </a>
    </div>
    <div class="col-sm-6 text-right">
      <button type="submit" class="btn btn-primary">Enregistrer</button>
    </div>
  </div>
</form
