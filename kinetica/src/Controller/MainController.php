<?php

namespace App\Controller;

use App\Entity\Post;
use App\Entity\Comment;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(): Response
    {
        $posts = $this->getDoctrine()->getRepository(Post::class)->findAll();
        dump($posts);
        
        foreach( $posts as $post){
            $comments = $post->getComments();
        };
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'posts' => $posts,
            'comments' => $comments,
        ]);
    }
}
