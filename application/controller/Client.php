<?php

namespace Application\Controller;

use Library\Controller;
use application\model\ClientRepository;

class Client extends Controller {

  private $_clientRepository;

  public function __construct()
  {
    $this->_clientRepository = new ClientRepository();
  }

  public function indexAction()
  {
    $list = $this->_clientRepository->getList();

    return $this->render('client/list', [
      "list" => $list,
    ]);
  }

}
