<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Articles;

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

     /**
      * @Route("/article/{id}", name="showarticle")
      */

     public function show($id)
    {
        $article = $this->getDoctrine()
        ->getRepository(Articles::class)
        ->find($id);

        if (!$article) {
            throw $this->createNotFoundException(
          'Kein Artikel vorhanden mit der ID ' . $id
        );
        }

        return $this->render('index/article.html.twig', [
        'blog_title' => 'Mein Blog',
        'article' => $article
      ]);
    }
}
