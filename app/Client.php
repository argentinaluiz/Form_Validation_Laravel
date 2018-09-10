<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    const MARITAL_STATUS = [
    	1 => 'Solteiro',
    	2 => 'Casado',
    	3 => 'Divorciado',
    	4 => 'Viuvo'
    ];

    protected $fillable  = [
    	'name', 
    	'document_number', 
    	'email', 
    	'fone', 
    	'defaulter', 
    	'date_birth', 
    	'sex', 
    	'marital_status', 
    	'physical_desability'
    ];
}

