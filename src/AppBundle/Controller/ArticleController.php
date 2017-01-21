<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends Controller
{
    /**
     * @Route("/articles", name="article_list")
     */
    public function indexAction()
    {
        return $this->render('article/index.html.twig');
        /*return new Response('<html><body>Article list</body></html>');*/
    }
    
    /**
     * @Route("/articles/{id}{slash}", name="article_page", requirements={"id" : "[1-9][0-9]*", "slash" : "/?"})
     */
    public function showAction($id)
    {
        return $this->render('article/show.html.twig', ['id' => $id]);
       /* return new Response("<html><body>Article: {$id}</body></html>");*/
    }
}
