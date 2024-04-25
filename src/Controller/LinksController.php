<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class LinksController extends AbstractController {
    #[Route('/', name: "links")] 

    public function linkHomePage(Request $request) {

        return $this->render('page_linkage/links.html.twig');
    }
}