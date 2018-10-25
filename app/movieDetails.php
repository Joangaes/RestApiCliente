<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movieDetails extends Model
{
    protected $fillable = [
        'id','actors','awards','countries','director','genres','imdb','metacritic','plot','poster','rated','released',
        'runtime','title','tomato','type','writers','year'
    ];

    protected $casts = [
        'year' => 'int',
    ];

    public function convertPossibleToIntegers(){
        $this->year = (int)$this->year;
        $this->runtime = (int)$this->runtime;
        $this->relased = date($this->released);
        $this->metacritic = (int)$this->metacritic;
        $this->awards['wins'] = (int)$this->awards['wins'];
        $this->awards['nominations'] = (int)$this->awards['nominations'];
        $this->imdb['rating'] = (double)$this->imdb['rating'];
        $this->imdb['votes'] = (integer)$this->imdb['integer'];
        $this->tomato['rating'] = (double)$this->tomato['rating'];
        $this->tomato['fresh'] = (int)$this->tomato['fresh'];
        $this->tomato['meter'] = (int)$this->tomato['meter'];
        $this->tomato['reviews'] = (int)$this->tomato['reviews'];
        $this->tomato['userMeter'] = (int)$this->tomato['userMeter'];
        $this->tomato['userRating'] = (int)$this->tomato['userRating'];
        $this->tomato['userReviews'] = (int)$this->tomato['userReviews'];
        return $this;
    }
}
