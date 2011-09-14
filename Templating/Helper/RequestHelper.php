<?php

  namespace DeBaasMedia\Bundle\FrameworkBundle\Templating\Helper;

  use Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper as BaseHelper;

  /**
   * RequestHelper
   *
   * @author  Marijn Huizendveld <marijn.huizendveld@gmail.com>
   */
  class RequestHelper extends BaseHelper
  {

    /**
     * Get the URI of the request.
     *
     * @return  string
     */
    public function getUri ()
    {
      return $this->request->getRequestUri();
    }

    /**
     * Get the URI of the request.
     *
     * @param   string  $arg_route  Test route to match.
     *
     * @return  Boolean
     */
    public function matchesRoute ($arg_route)
    {
      return preg_match('#(?:' . $arg_route . ')#', $this->getUri());
    }

  }
