<?php

namespace Test\Blog\CrudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TestBlogCrudBundle:Default:index.html.twig', array('name' => $name));
    }
}
