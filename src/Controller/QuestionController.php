<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
	/**
	 * @Route("/")
	 */
	public function homepage()
	{
		return new Response('What a controller a darling');
	}

	/**
	 * @Route("/questions/{slug}")
	 */
	public function show($slug)
	{
		$comments = [
			1,
			2,
			3
		];
		//return new Response(sprintf("what is my slug %s", $slug));
		return $this->render('question/show.html.twig', [
			'title' => $slug,
			'comments' => $comments
		]);
	}

}