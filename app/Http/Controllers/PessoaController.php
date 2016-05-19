<?php
/**
 * Created by PhpStorm.
 * User: eduardodantas
 * Date: 18/05/16
 * Time: 23:57
 */

namespace CodeAgenda\Http\Controllers;


use CodeAgenda\Entities\Pessoa;

class PessoaController extends Controller
{
    public function destroy($id)
    {
        Pessoa::destroy($id);

        return redirect()->route('agenda.index');
    }
}