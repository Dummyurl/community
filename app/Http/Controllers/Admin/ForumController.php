<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForumController extends Controller
{

    public function index()
    {
        return view('Fourm/show');
    }
    public function create()
    {
        return view('Fourm/create');
    }
    public function store(Request $request)
    {
        dd($request);

    }

}
