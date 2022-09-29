<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\QuestionRepository;
use App\Repository\AnswerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuizzController extends AbstractController
{
    #[Route('/quizz/{id}', name: 'app_quizz')]
    public function index(CategorieRepository $categorie, QuestionRepository $questions, int $id = 1): Response
    {
        $quizz_name = $categorie->findOneBy(array('id'=>$id));
        $questions_selected = $questions->findBy(array('id_categorie'=>$id));
        // dd($questions_selected);
        return $this->render('quizz/index.html.twig', [
            'quizz_name' => $quizz_name,
            'questions' => $questions_selected,
        ]);
    }

    #[Route('/quizz/{id}/{question}', name: 'app_quizz_question')]
    public function whichQuizz(CategorieRepository $categorie, QuestionRepository $questions, AnswerRepository $anwsers, int $id, int $id_question = null)
    {
        $quizz_name = $categorie->findOneBy(array('id'=>$id));
        // dd($questions);
        $question = $questions->findOneBy(array('id'=>$id_question));
        return $this->render('quizz/quizz.html.twig', [
            'quizz_name' => $quizz_name,
            'question' => $question
        ]);
    }
}
