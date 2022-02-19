<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $fillable = [
        'azienda',
        'stazione di partenza',
        'stazione di arrivo',
        'data',
        'orario di partenza',
        'orario di arrivo',
        'codice treno',
        'numero carrozze',
        'in orario',
        'cancellato'
    ];

    public $timestamp = false;
}
