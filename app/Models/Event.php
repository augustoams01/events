<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;


    protected $casts = [
        'items' => 'array'
    ];

    protected $dates = [
        'date'
    ];

    protected $guarded = []; //diz que tudo q foi enviado pelo post pode ser att

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function users(){
        return $this->belongsToMany('App\Models\User');
    }

}

// aqui que é recebido os tipos de dado enviados da requisição do form, e por padrão ele só recebe string
// então é aqui que nós iremos definir os tipos de dados das variaveis que estão no controller