<?php


namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('OMG! My first page already! Whoop!');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug) {

        return new Response(
            sprintf('Future page to show one space article: %s', $slug)
        );
    }
}