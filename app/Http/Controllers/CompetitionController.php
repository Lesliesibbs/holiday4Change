<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompetitionController extends Controller
{
  public function index()
  {

    return view('competition.index');

  }
}