<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Products;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[AsController]
class GetUserProducts extends AbstractController
{
    public function __invoke(User $user)
    {

    }
}
