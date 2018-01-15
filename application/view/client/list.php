<table class="table">
  <thead class="thead-default">
    <tr>
      <th>#</th>
      <th>Nom</th>
      <th>Prénom</th>
      <th>email</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
<?php foreach($layout->getVar('list') as $client): ?>
    <tr>
      <th scope="row"><?php echo $client['id'] ?></th>
      <td><?php echo $client['nom'] ?></td>
      <td><?php echo $client['prenom'] ?></td>
      <td><?php echo $client['email'] ?></td>
      <td>
        <a href="/client/edit?id=<?php echo $client['id'] ?>">
          <button type="button" class="btn btn-primary" >Consulter</button>
        </a>
        <a href="/client/edit?id=<?php echo $client['id'] ?>">
          <button type="button" class="btn btn-danger" >Supprimer</button>
        </a>
      </td>
    </tr>
<?php endforeach ?>
  </tbody>
</table>
