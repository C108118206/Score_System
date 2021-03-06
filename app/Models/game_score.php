<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class game_score extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_id','score_titles_id','score'
    ];

    public function team(){
        return $this->belongsTo('App\Models\team');
    }

    public function score_title(){
        return $this->belongsTo('App\Models\score_title');
    }

    public function adjudicator(){
        return $this->belongsTo('App\Models\adjudicator');
    }
}
