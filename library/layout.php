<?php

namespace Library;

class layout
{
  private $_body;
  private $_vars;

    public static function e($value)
     {
        return htmlspecialchars($value, ENT_COMPAT | ENT_HTML5 | ENT_SUBSTITUTE, 'utf8');
    }

    public function render()
    {
      include('application/layout.php');
    }

    public function renderBody()
    {
        return $this->_body;
    }

    public function setBody(string $body)
    {
      $this->_body = $body;

      return $this;
    }

    public function getVars()
    {
      return $this->_vars;
    }

    public function getVar(string $key)
    {
      if (!isset($this->_vars[$key])) {
        throw new \Exception("The variable [$key] doesn't exists");
      }

      return $this->_vars[$key];
    }

    public function setVars(array $vars): self
    {
      $this->_vars = $vars;

      return $this;
    }

}
