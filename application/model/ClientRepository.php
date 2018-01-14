<?php

namespace Application\Model;

use Library\Mysql;

class ClientRepository extends Mysql {

    public function getList()
    {
      return $this->getConnexion()->query('select * from client');
    }

}
