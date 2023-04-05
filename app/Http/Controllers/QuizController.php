<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quizzes = DB::table('quizzes')->select('id', 'name')->get();

        return view('quizzes.index')->with('quizzes', $quizzes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('quizzes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'quizName' => 'required',
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
            'a1' => 'required',
            'a2' => 'required',
            'a3' => 'required'
        ]);

        $quiz = new Quiz();

        $quiz->name = $request->input('quizName');
        $quiz->q1 = $request->input('q1');
        $quiz->q2 = $request->input('q2');
        $quiz->q3 = $request->input('q3');
        $quiz->a1 = $request->input('a1');
        $quiz->a2 = $request->input('a2');
        $quiz->a3 = $request->input('a3');

        $quiz->save();

        return redirect()->route('quiz.index')->with('success', 'New Quiz Created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $quiz = DB::table('quizzes')->select(
            'name',
                    'q1',
                    'q2',
                    'q3',
                    'a1',
                    'a2',
                    'a3'
        )->where('id', $id)->get();

        return view('quizzes.view')->with('quiz', $quiz);
    }

    public function submit()
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
