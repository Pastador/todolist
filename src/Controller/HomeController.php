<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController
{

    /***
     * @Route "/" name="index"
     */
    public function index () : Response
    {
        return new Response("Hello World");
    }

}