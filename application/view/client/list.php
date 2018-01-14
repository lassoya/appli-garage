<table class="table">
  <thead class="thead-default">
    <tr>
      <th>#</th>
      <th>Nom</th>
      <th>Prénom</th>
      <th>email</th>
    </tr>
  </thead>
  <tbody>
<?php foreach($layout->getVar('list') as $client): ?>
    <tr>
      <th scope="row"><?php echo $client['id'] ?></th>
      <td><?php echo $client['nom'] ?></td>
      <td><?php echo $client['prenom'] ?></td>
      <td><?php echo $client['email'] ?></td>
    </tr>
<?php endforeach ?>
  </tbody>
</table>
