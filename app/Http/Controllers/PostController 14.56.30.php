<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PostController extends Controller
{
    public function index()
    {

        $posts = Post::latest()->paginate(10);

        return Inertia::render('Post/Index', ['posts' => $posts]);
    }


}
