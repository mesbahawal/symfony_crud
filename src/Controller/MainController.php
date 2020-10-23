<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index()
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/custom/{code}", name="custom")
     * @param Request $request
     * @return Response
     */
    public function custom(Request $request): Response
    {
        $code = $request->get('code');

        if ($code == '404')
        {
            $exception = 'Page Not Found.';
        }
        return $this->render('main/custom.html.twig', [
            'exception_code' => $code,
            'exception_desc' => $exception,
        ]);
    }
}
