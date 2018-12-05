<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Score;

class ProjectsController extends Controller
{


    public function index(){

        $projects = Score::all();

        return view('projects.index', compact('projects'));
    }

    public function create(){

        return view('projects.create');
    }

    public function store(){

        $project = new score();

        $project->score = request('score');

        $project->id = request('user_id');

        $project->save();

        return redirect('/projects');

    }

    public function getUserId() {
        $projects = User::all();

        return $projects;
    }
}

