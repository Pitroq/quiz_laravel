<?php

namespace App\Http\Controllers;

use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Question;
use App\Models\Result;

class QuizController extends Controller {
    private $questionsCount = 10;

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
        $questions = Question::inRandomOrder()->limit($this->questionsCount)->get();
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

    public function result($questions = array(), $score = 0) {
        if (empty($questions)) return redirect("/");
        
        return view('result', [
            'questions' => $questions,
            'score' => $score,
            'questionsCount' => $this->questionsCount
        ]);

    }

    public function insert(Request $request) {
        $questions = array();
        $score = 0;
        foreach ($request->all() as $key => $userAnswer) {
            if (str_contains($key, 'question_')) {
                $question = Question::findOrFail(str_replace("question_", "", $key));
                
                $correctAnswer = $question["answer_{$question['correct_answer']}"];
                
                if ($userAnswer == $correctAnswer) {
                    $score += 1;
                }


                array_push($questions, [
                    'userAnswer' => $userAnswer,
                    'question' => $question['question'],
                    'correctAnswer' => $correctAnswer,
                ]);

            }
        }

        if (null !== $request->get('username')) {
            $result = new Result();
            $result->username = $request->get('username');
            $result->score = $score;
            $result->max_score = $this->questionsCount;
            $result->save();
        }

        return $this->result($questions, $score);

    }

    public function ranking() {
        $ranking = Result::orderByDesc('score')->get();

        return view('ranking', ['ranking' => $ranking]);
    }
}


