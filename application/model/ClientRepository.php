<?php

namespace Application\Model;

use Library\Mysql;

class ClientRepository extends Mysql {

    public function getList()
    {
      return $this->getConnexion()->query('select * from client');
    }

    public function find(int $id)
    {
      $sth = $this->getConnexion()->prepare('select * from client where id = :id');
      $sth->execute([ 'id' => $id ]);
      $result = $sth->fetch(\PDO::FETCH_ASSOC);

      return false !== $result ? $result : null;
    }

    public function save(array $data): self
    {
      $sth = $this->getConnexion()->prepare('update client set nom = :nom, prenom = :prenom, date_de_naissance = :date_de_naissance, email = :email where id = :id');

      // $sth->bindValue('nom', $data['nom']);
      // $sth->bindValue('prenom', $data['prenom']);
      // $sth->bindValue('date_de_naissance', $data['date_de_naissance']);
      // $sth->bindValue('email', $data['email']);
      // $sth->bindValue('id', $data['id']);

      $sth->execute($data);

      return $this;
    }

}
