<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    /**
     * @Route("/", name="index")
     */
     public function index()
     {
         $article = $this->getDoctrine()
         ->getRepository(Articles::class)
         ->getAllOrderDesc(0);

         if (!$article) {
             throw $this->createNotFoundException(
           'Keine Artikel vorhanden in der Datenbank'
         );
         }

         return $this->render('index/index.html.twig', [
         'blog_title' => 'Mein Blog',
         'article' => $article
       ]);
     }
}
