<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CRUDcon extends Controller
{
    public function get(){
        return 'get';
    }
    public function put(){
        return 'put';
    }
    public function post(){
        return 'post';
    }
    public function delete(){
        return 'delete';
    }
}
