<?php

namespace Library;

use Library\Layout;

abstract class Controller {

  public function redirect(string $path)
  {
    header( 'Location: ' . $path );
  }


  public function render(string $path, ?array $parameter)
  {
    $layout = new Layout();
    $layout->setVars($parameter);

    ob_start();
    include('application/view/'.$path.'.php');
    $body = ob_get_contents();
    ob_end_clean();

    $layout->setBody($body);

    $layout->render();
  }
}
