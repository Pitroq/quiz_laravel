<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Question;

class QuizController extends Controller {
    private $questionCount = 5;

    private function shuffleArray($array) {
        for ($i = 0; $i < count($array); $i++){
            $position = rand($i, count($array) -1);
            $temp = $array[$i];
            $array[$i] = $array[$position];
            $array[$position] = $temp;
        }

        return $array;
    }
    
    public function home() {
        return view('home');
    }

    public function quiz() {
        $questions = Question::inRandomOrder()->limit($this->questionCount)->get();
        foreach($questions as $question) {
            $answers = $this->shuffleArray([$question['answer_a'], $question['answer_b'], $question['answer_c'], $question['answer_d']]);

            $question['answer_a'] = $answers[0];
            $question['answer_b'] = $answers[1];
            $question['answer_c'] = $answers[2];
            $question['answer_d'] = $answers[3];
        }

        return view('quiz', [
            'questions' => $questions
        ]);
    }

    public function one_question() {
        $question = Question::all()->random(1);

        return view('one_question', [
            'question' => $question[0]
        ]);
    }

    public function result(Request $request) {
        $correctAnswers = array();
        $userAnswers = array();
        $questionList = array();
        $score = 0;

        foreach ($request->all() as $key => $userAnswer) {
            if (str_contains($key, 'question_')) {
                array_push($userAnswers, $userAnswer); // user

                $question = Question::findOrFail(substr($key, -1));
                array_push($questionList, $question['question']); // que

                $correctAnswer = $question["answer_{$question['correct_answer']}"];
                array_push($correctAnswers, $correctAnswer); // correct

                
                if ($userAnswer == $correctAnswer) {
                    $score += 1;
                }
            }
        }

        return view('result',[
            'userAnswers' => $userAnswers,
            'correctAnswers' => $correctAnswers,
            'questionList' => $questionList,
            'score' => $score
        ]);
    }
}


