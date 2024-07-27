<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produtos extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = ['loja_id','Titulo', 'Preco', 'Descri'];
    public function loja()
    {
        return $this->belongsTo(listando::class,'loja_id');
    }
}
