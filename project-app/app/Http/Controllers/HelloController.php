<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    function index(){
        return "Hello world from controllers";
    }
    function showUser(string $id, string $comments){
        return "User" . $id . "Comments Count" . $comments;
    }
    function hellohi(){
        return "Hello hi";
    }
}
