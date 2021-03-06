<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    
    protected $table = 'produtos';
    //Informa o que pode ser preenchido por massa

    protected $fillable = array('id','produto_nome', 'produto_desc','produto_valor', 'produto_qtd','categoria_id');
    

    public function categoria(){
        return $this->belongsTo('App\Categoria');
    }

}
