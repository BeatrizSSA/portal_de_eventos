<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eventos extends Model {
    
    protected $fillable = [
        'titulo', 
        'conteudo', 
        'created_at',
        'updated_et',
    ];

    public function scopeGetEvents($query, $filter)
    {            
        if ($filter == 'today')
        {
            return $query->getEventsToday($query);
        }
        if ($filter == 'five')
        {
            return $query->getEventsFive($query);
        }
        return $query;
    }
    
    public function scopeGetEventsToday($query)
    {
         return $query-> //... code;
    }
    public function scopeGetEventsFive($query)
    {
         return $query-> //... code;
    }
}
