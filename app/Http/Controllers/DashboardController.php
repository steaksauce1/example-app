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
                'notes' => Notes::latest()->filter(
                    request(['body'])
                )->paginate(12)->withQueryString()
            ]);
    }

    public function calendar(){

        return view('dashboard.calendar');
    }

    public function create(){
        return view('dashboard.create-note');
    }

    public function store(){

        // ddd(request());
        $attributes = request()->validate([
            'body' => 'required'
        ]);
        $attributes['user_id'] = auth()->id();
        Notes::create($attributes);

        
        return redirect('dashboard');
    }


    public function destroy(Notes $notes){
        $notes->delete();
        return redirect('dashboard');
}



}
