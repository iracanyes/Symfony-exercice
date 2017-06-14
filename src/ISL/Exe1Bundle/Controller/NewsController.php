<?php

/* 
 * Content: Exe1Bundle : NewsController
 */
namespace ISL\Exe1Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use ISL\Exe1Bundle\Entity\News;
use ISL\Exe1Bundle\Entity\Image;

class NewsController extends Controller
{
    
    public function homeAction()
    {
        $files=[
            'app/Resources/DataFixtures/ORM/news.yml',
            'app/Resources/DataFixtures/ORM/image.yml',
        ];
        $container= $this->get('fidry_alice_data_fixtures.doctrine.persister_loader');
        $object=$container->load($files);
        
        return new Response(dump($object));
    }
    
    public function newsDetailAction($id)
    {
        
    }        
}
