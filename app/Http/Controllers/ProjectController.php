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
        return view('admin.pages.corposcelestes.index',compact('testes'));
    }

    public function create()
    {
        return view('admin.pages.corposcelestes.create1');
    }

    public function edit()
    {
        return view('admin.pages.corposcelestes.edit');
    }

    public function store(Request $request)
    {
        dd($request->except('_token'));
        return 'criando o item desejado';
    }

    public function update(Request $request)
    {
        dd($request->except('_token'));
        
    }

    public function delete ()
    {
        return view ('admin.pages.corposcelestes.delete');
    }

    public function destroy(Request $request)
    {
        dd($request->except('_token'));
    }

}
