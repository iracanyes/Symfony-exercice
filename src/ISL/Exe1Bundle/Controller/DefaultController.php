<?php

namespace ISL\Exe1Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ISLExe1Bundle:Default:index.html.twig');
    }
}
