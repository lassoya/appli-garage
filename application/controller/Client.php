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

  public function editAction()
  {
    $id = $_GET['id'] ?? null;
    $client = $this->_clientRepository->find($id);

    return $this->render('client/edit', [
      'client' => $client,
    ]);
  }

  public function saveAction()
  {
    $dataClient = $_POST;
    
    $this->_clientRepository->save($dataClient);

    $this->redirect('/client');
  }

}
