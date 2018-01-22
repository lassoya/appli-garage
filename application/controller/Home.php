<?php

namespace Application\Controller;

use Library\Controller;

class Home extends Controller {

  public function indexAction()
  {

    return $this->render('index', [ 'name' => 'Samueloo']);
  }

}
