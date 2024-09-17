<?php

namespace App\Http\Controllers;

use App\Events\MyEvent;
use Illuminate\Http\Request;

class pruebaController extends Controller
{
    public function index(){
        event(new MyEvent('hello world'));
        return "view()";
    }
}
