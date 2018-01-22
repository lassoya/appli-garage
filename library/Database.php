<?php

namespace Library;

interface Database {

  public function getConnexion();

  public function closeConnexion();
}
