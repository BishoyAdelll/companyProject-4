<?php

namespace App\Http\Controllers;
use App\Http\Requests\blogsRequest;
use App\Http\Requests\contactFormRequest;
use App\Models\Blog;
use App\Models\subject;
use Illuminate\Support\Facades\Request;

class formController extends Controller
{
    public function store(contactFormRequest $request)
    {
        $validatedData=$request->validated();
        Subject::create([
            'name'=>$validatedData['name'],
            'email'=>$validatedData['email'],
            'subject'=>$validatedData['subject'],
            'message'=>$validatedData['message'],
        ]);
        return redirect('/')->with('message','successfully');
    }
    public function BlogsStore(blogsRequest $request)
    {
       $validatedData=$request->validated();
       Blog::create([
        'email'=>$validatedData['email'],
    ]);
       return redirect('/')->with('message','successfully');
    }
}
