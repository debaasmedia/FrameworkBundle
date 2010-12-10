<?php

  namespace DeBaasMedia\Bundle\FrameworkBundle\Templating\Helper;

  use Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper as BaseHelper;

  class RequestHelper extends BaseHelper
  {

    public function getUri ()
    {
      return $this->request->getRequestUri();
    }

    public function matchesRoute ($arg_route)
    {
      return preg_match('#(?:' . $arg_route . ')#', $this->getUri());
    }

  }
