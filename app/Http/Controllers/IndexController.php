<?php
/**
 * Created by PhpStorm.
 * User: eduardodantas
 * Date: 16/05/16
 * Time: 22:53
 */

namespace CodeAgenda\Http\Controllers;


use CodeAgenda\Entities\Pessoa;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index($letra = 'A')
    {
        $pessoas = Pessoa::where('apelido', 'like', $letra.'%')->get();
        $letras = $this->getLetras();
        return view('agenda', compact('pessoas', 'letras'));
    }

    public function busca(Request $request)
    {
        $busca = $request->busca;
        $pessoas = [];
        if (!empty($busca)) {
            $pessoas = Pessoa::where('nome', 'like', "%{$busca}%")
                ->orWhere('apelido', 'like', "%{$busca}%")
                ->get();
        }
        $letras = $this->getLetras();
        return view('agenda', compact('pessoas', 'letras'));
    }

    public function getLetras()
    {
        $letras = [];
        foreach(Pessoa::all() as $pessoa){
            $letras[] = strtoupper(substr($pessoa->apelido,0,1));
        }
        sort($letras);

        return array_unique($letras);
    }


}