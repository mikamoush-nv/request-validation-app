<?php

namespace App\Controller;
use App\Dto\CreatePostDto;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Attribute\MapRequestPayload;
use Symfony\Component\Routing\Annotation\Route;

#[Route(
    '/posts',
    name: 'create_post',
    methods: ['POST'],
)]
class CreatePostAction extends AbstractController
{
    public function __invoke(
        #[MapRequestPayload] CreatePostDto $createPostDto,
    ): void
    {
        dd($createPostDto);
    }
}