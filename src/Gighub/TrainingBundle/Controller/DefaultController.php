<?php

namespace Gighub\TrainingBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    public function helloAction()
    {
        return new Response('<body>Hello World!</body>');
    }
}