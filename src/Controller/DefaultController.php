<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{

    #[Route('/get/{id}', methods: ['GET'])]
    public function index(int $id): JsonResponse
    {
        return $this->json(["id" => $id]);
    }


}