<?php
/**
 * Created by PhpStorm.
 * User: eduardodantas
 * Date: 16/05/16
 * Time: 23:13
 */

namespace CodeAgenda\Entities;


use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{

    protected $table = 'telefones';

    protected $fillable = [
        'descricao',
        'codpais',
        'ddd',
        'prefixo',
        'sufixo',
    ];

    public function getNumeroAttribute()
    {
        return "{$this->codpais} ({$this->ddd}) {$this->prefixo}-{$this->sufixo}";
    }
}