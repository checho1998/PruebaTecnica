<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;

class DemoController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function getall()
    {
        $respuesta = Http::get('https://jsonplaceholder.typicode.com/todos');
        $todo = $respuesta -> Json();
        return  $todo;
    }

    public function insert(Request $request)
    {
        
        $respuesta = Http::post('https://jsonplaceholder.typicode.com/todos',[
            'userId' => $request['userId'],
            'id' => $request['id'],
            'title' => $request['title'],
            'completed'=>$request['completed']
        ] );
        $todo = $respuesta -> Json();
        return $todo;
    }

    public function delete($id)
    {
        $respuesta = Http::delete('https://jsonplaceholder.typicode.com/todos/'.$id);
        $todo = $respuesta -> Json();
        return $todo;
    }

    public function update(Request $request)
    {
        $respuesta = Http::put('https://jsonplaceholder.typicode.com/todos/'.$request['id'],[
            'title' => $request['title'],
            'completed' => $request['completed']
        ]);

        return $respuesta -> Json();
    }

}
