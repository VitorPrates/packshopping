<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listando extends Model
{
    use HasFactory;

    protected $table = 'listas_tabela';
    protected $fillable = ['Titulo', "empresa", "local", "website",'email','descri','tags'];
    public function scopefilter($query, array $filters)
    {
        if($filters['tag'] ?? false)
        {
            $query -> where('tags', 'like','%'.request('tag').'%');
        }
        if($filters['search'] ?? false)
        {
            $query -> where('title', 'like','%'.request('search').'%')
             ->orwhere('description', 'like','%'.request('search').'%')
             ->orwhere('local', 'like','%'.request('search').'%')
             ->orwhere('tags', 'like','%'.request('search').'%');
        }
    }

    //relações loja-user
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function scopebuscarLoja($query)
    {
        // return $query -> where('title','like', '%'.request($query).'%');
        return LISTANDO::find(1);
    }
}
