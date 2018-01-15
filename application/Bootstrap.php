<?php
namespace Application;

use Application\Controller;

class Bootstrap {

  private function _getRequestDetail(): array
  {
    $uri = explode('/', $_SERVER['REDIRECT_URL']);
    if(count($uri)> 3) {
      throw new \Exception('The uri is invalid !');
    }

    $controller = strlen($uri[1]) > 0 ? $uri[1] : 'home';
    $action = isset($uri[2]) && strlen($uri[2]) > 0 ? $uri[2] : 'index';

    return [
      'controller' => $controller,
      'action' => $action,
      'query' => $_SERVER['REDIRECT_QUERY_STRING'] ?? null,
    ];
  }


  public function run ()
  {
    $request = $this->_getRequestDetail();
    $namespaceCtrl = 'Application\Controller\\'.UcFirst($request['controller']);
    $action = $request['action'].'Action';

    if (!class_exists($namespaceCtrl)) {
      throw new \Exception('The page doesn\'t exists ', 404);
    }

    $controller = new $namespaceCtrl();
    if (!method_exists($controller, $action)) {
      throw new \Exception('The page doesn\'t exists ', 404);
    }

    return call_user_func_array([$controller, $action], []);
  }
}
