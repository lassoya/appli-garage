<?php

namespace Application\Controller;

use Application\Controller\Controller;

class Home extends Controller{

  public function indexAction()
  {

    return $this->render('index', [ 'name' => 'Samueloo']);
  }

}
