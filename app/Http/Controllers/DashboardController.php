<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        //$posts = Post::orderBy('created_at', 'DESC')->take(10)->get();
        //$postCount = Post::all()->count();
        //$categoryCount = Category::all()->count();
        //$tagCount = Tag::all()->count();
        //$userCount = User::all()->count();


        return view('admin.dashboard.index');
    }
}
