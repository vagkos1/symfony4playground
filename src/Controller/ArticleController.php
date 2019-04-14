<?php

declare(strict_types=1);

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('Nice page!');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show(string $slug)
    {
        return new Response(
            sprintf('Future page to show an article about %s', $slug)
        );
    }
}
