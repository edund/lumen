<?php
/**
 * Created by PhpStorm.
 * User: eduardodantas
 * Date: 18/05/16
 * Time: 23:55
 */

namespace CodeAgenda\Http\Controllers;


use CodeAgenda\Entities\Telefone;

class TelefoneController extends Controller
{
    public function destroy($id)
    {
        Telefone::destroy($id);

        return redirect()->route('agenda.index');
    }
}