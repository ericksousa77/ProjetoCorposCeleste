<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{

    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        $testes = [1,2,3,4,5,6,7,8];
        return view('index',compact('testes'));
    }

    public function create()
    {
        return view('create1');
    }

    public function edit()
    {
        return view('edit');
    }

    public function store(/*Request $request*/)
    {
        /*dd($request->except('_token'));*/
        return 'criando o item desejado';
    }

    public function update(/*Request $request*/)
    {
        /*dd($request->except('_token'));*/
        return 'editando o item desejado';
        
    }

    public function delete ()
    {
        return view ('delete');
    }

    public function destroy(/*Request $request*/)
    {
        /*dd($request->except('_token'));*/
        return 'deletando o item desejado';
    }

}
