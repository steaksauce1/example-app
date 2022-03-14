<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Newsletter;
use Exception;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    //
    public function __invoke(Newsletter $newsletter){
        request()->validate(['email' => 'required|email']);
        try {
            $newsletter->subscribe(request('email'));
        } catch(\Exception $e) {
            throw ValidationException::withMessages([
                'email' => 'this email cannot be verified'
            ]);
        }
//ddd($response);
        return view('/posts')->with('success', 'you are fly aboard southwest airlines');
    }
}
