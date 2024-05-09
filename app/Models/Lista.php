<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    use HasFactory;
    protected $table = 'listas';
    protected $primaryKey = 'id_lista';
    public $timestamps = true;
    protected $fillable = [
        'nome',
        'descricao',
        'id_usuario'
    ];
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }
    public function produtos(){
        return $this->hasMany(Produto::class, 'id_lista', 'id_lista');
    }
}
