<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;

class Produto extends Model
{
    use HasFactory;
    //campos
    protected $fillable = ['nomedoproduto', 'anodomodelo', 'precodelista'];

    //chave primaria
    protected $primaryKey = 'pkproduto';

    //nome da tabela
    protected $table = 'produtos';

    //informa que esta trabalhando com incremento
    public $incrementing = true;

    // não utiliza timestamps nos controles (created & updated)
    public $timestamps = false;

    public function categoria() {
        return $this->belongsTo(Categoria::class, 'fkcategoria', 'pkcategoria');
    }


}
