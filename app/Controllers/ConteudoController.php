<?php

namespace App\Controllers;

use App\Models\ConteudoModel;
class ConteudoController extends BaseController
{
    protected $helpers = ['url', 'form'];

    public function index(): string
    {
        $model = new ConteudoModel();

        $dados['conteudo'] = $model->find(1);

        return view('home', $dados);
    }

    public function contato(): string
    {
        $model = new ConteudoModel();

        $dados['conteudo'] = $model->find(4);

        return view('contato', $dados);
    }

}