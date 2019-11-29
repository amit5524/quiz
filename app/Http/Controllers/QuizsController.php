<?php

namespace App\Http\Controllers;

use App\Quiz;
use Illuminate\Http\Request;
use App\Http\Requests\StoreQuizsRequest;
use App\Http\Requests\UpdateQuizsRequest;

class QuizsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of Quiz.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $quizs = Quiz::all();
        return view('quizs.index', compact('quizs'));
    }

    /**
     * Show the form for creating new Quiz.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quizs.create');
    }

    /**
     * Store a newly created Quiz in storage.
     *
     * @param  \App\Http\Requests\StoreTopicsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuizsRequest $request)
    {
        Quiz::create($request->all());

        return redirect()->route('quizs.index');
    }
}
