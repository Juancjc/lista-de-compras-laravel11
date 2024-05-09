<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $table = 'produtos';
    protected $primaryKey = 'id_produto';
    public $timestamps = true;
    protected $fillable = [
        'nome',
        'descricao',
        'preco',
        'id_lista'
    ];
    public function lista()
    {
        return $this->belongsTo(Lista::class, 'id_lista', 'id_lista');
    }
}
