<?php

namespace App\Http\Controllers;
// use Illuminate\Http\Request;
use App\Services\Newsletter;
use Exception;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{

     public function __invoke(Newsletter $newsletter)
    {
        request()->validate(['email' => 'required|email']);

        try {
            $newsletter->subscribe(request('email'));
        } catch (Exception $e) {
            throw ValidationException::withMessages([
                'email' => 'cannot validate.'
            ]);
        }

        return redirect('/posts')->with('success', 'You are now signed up for our newsletter!');
    }
}
