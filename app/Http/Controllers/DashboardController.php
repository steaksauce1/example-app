<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Models\Notes;

class DashboardController extends Controller
{
    //
    public function index(){

        return view('dashboard.index', [
                'notes' => Notes::latest()
       ]);
    }

    public function create(){
        return view('dashboard.create-note');
    }

}
