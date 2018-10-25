@csrf

<div class="form-group">
        <label class="col-md-4 control-label" for="name">Actors</label>  
    <div class="col-md-4">
        @if(isset($amount_of_actors))
            @for($i = 0; $i<$amount_of_actors; $i++)
            <input id="actores[]" name="actors[]" placeholder="" value="{{$actors[$i]}}" class="form-control input-md" ="" type="text">
            @endfor
        @endif
        
    </div>
</div>

<div class="form-group">
        <label class="col-md-4 control-label" for="name">Countries</label>  
    <div class="col-md-4">
        @if(isset($countries))
            @for($i = 0; $i<count($countries); $i++)
            <input id="countries[]" name="countries[]" placeholder="" value="{{$countries[$i]}}" class="form-control input-md" ="" type="text">
            @endfor
        @endif
        
    </div>
</div>

<div class="form-group">
        <label class="col-md-4 control-label" for="name">Actors</label>  
    <div class="col-md-4">
        @if(isset($genres))
            @for($i = 0; $i<count($genres); $i++)
            <input id="genres[]" name="genres[]" placeholder="" value="{{$genres[$i]}}" class="form-control input-md" ="" type="text">
            @endfor
        @endif
    </div>
</div>

<div class="form-group">
        <label class="col-md-4 control-label" for="rating">Rating</label>  
    <div class="col-md-4">
        <input id="rating" name="rating" placeholder="" value="{{isset($imdb)? $imdb['rating'] : ""}}" class="form-control input-md" ="" type="text">
    </div>
</div>

<div class="form-group">
        <label class="col-md-4 control-label" for="name">Votes</label>  
    <div class="col-md-4">
        <input id="nominations" name="votes" placeholder="" value="{{isset($imdb)? $imdb['votes'] : ""}}" class="form-control input-md" ="" type="text">
    </div>
</div>

<div class="form-group">
        <label class="col-md-4 control-label" for="consensus">Consensus</label>  
    <div class="col-md-4">
        <input id="nominations" name="consensus" placeholder="" value="{{isset($tomato)? $tomato['consensus'] : ""}}" class="form-control input-md" ="" type="text">
    </div>
</div>

<div class="form-group">
        <label class="col-md-4 control-label" for="consensus">Fresh</label>  
    <div class="col-md-4">
        <input id="fresh" name="fresh" placeholder="" value="{{isset($tomato['fresh'])? $tomato['fresh'] : ""}}" class="form-control input-md" ="" type="number">
    </div>
</div>

<div class="form-group">
        <label class="col-md-4 control-label" for="consensus">Meter</label>  
    <div class="col-md-4">
        <input id="fresh" name="meter" placeholder="" value="{{isset($tomato)? $tomato['meter'] : ""}}" class="form-control input-md" ="" type="number">
    </div>
</div>

<div class="form-group">
        <label class="col-md-4 control-label" for="consensus">Tomato Reviews</label>  
    <div class="col-md-4">
        <input id="reviews" name="reviews" placeholder="" value="{{isset($tomato)? $tomato['reviews'] : ""}}" class="form-control input-md" ="" type="number">
    </div>
</div>

<div class="form-group">
        <label class="col-md-4 control-label" for="consensus">User Meter</label>  
    <div class="col-md-4">
        <input id="userMeter" name="userMeter" placeholder="" value="{{isset($tomato)? $tomato['userMeter'] : ""}}" class="form-control input-md" ="" type="number">
    </div>
</div>

<div class="form-group">
        <label class="col-md-4 control-label" for="consensus">User Rating</label>  
    <div class="col-md-4">
        <input id="userRating" name="userRating" placeholder="" value="{{isset($tomato)? $tomato['userRating'] : ""}}" class="form-control input-md" ="" type="number">
    </div>
</div>

<div class="form-group">
        <label class="col-md-4 control-label" for="consensus">User Reviews</label>  
    <div class="col-md-4">
        <input id="fresh" name="userReviews" placeholder="" value="{{isset($tomato)? $tomato['userReviews'] : ""}}" class="form-control input-md" ="" type="number">
    </div>
</div>

<div class="form-group">
        <label class="col-md-4 control-label" for="consensus">Tomato Rating</label>  
    <div class="col-md-4">
        <input id="fresh" name="tomato_rating" placeholder="" value="{{isset($tomato)? $tomato['rating'] : ""}}" class="form-control input-md" ="" type="number">
    </div>
</div>

<div class="form-group">
        <label class="col-md-4 control-label" for="image">Consensus</label>  
    <div class="col-md-4">
        <input id="nominations" name="image" placeholder="" value="{{isset($tomato)? $tomato['image'] : ""}}" class="form-control input-md" ="" type="text">
    </div>
</div>

<div class="form-group">
        <label class="col-md-4 control-label" for="name">Nominations</label>  
    <div class="col-md-4">
        <input id="nominations" name="nominations" placeholder="" value="{{isset($awards)? $awards['nominations'] : ""}}" class="form-control input-md" ="" type="text">
    </div>
</div>

<div class="form-group">
        <label class="col-md-4 control-label" for="name">Text</label>  
    <div class="col-md-4">
        <input id="text" name="text" placeholder="" value="{{isset($awards)? $awards['text'] : ""}}" class="form-control input-md" ="" type="text">
    </div>
</div>

<div class="form-group">
        <label class="col-md-4 control-label" for="name">Wins</label>  
    <div class="col-md-4">
        <input id="wins" name="wins" placeholder="" value="{{isset($awards)? $awards['wins'] : ""}}" class="form-control input-md" ="" type="text">
    </div>
</div>
      
<div class="form-group">
        <label class="col-md-4 control-label" for="name">Director</label>  
    <div class="col-md-4">
        <input id="director" name="director" placeholder="" value="{{isset($director)? $director : ""}}" class="form-control input-md" ="" type="text">
    </div>
</div>
      
<div class="form-group">
        <label class="col-md-4 control-label" for="name">Metacritic</label>  
    <div class="col-md-4">
        <input id="metacritic" name="metacritic" placeholder="" value="{{isset($metacritic)? $metacritic : ""}}" class="form-control input-md" ="" type="number">
    </div>
</div>

<div class="form-group">
        <label class="col-md-4 control-label" for="name">Plot</label>  
    <div class="col-md-4">
        <input id="plot" name="plot" placeholder="" value="{{isset($plot)? $plot : ""}}" class="form-control input-md" ="" type="text">
    </div>
</div>
      

<div class="form-group">
        <label class="col-md-4 control-label" for="name">Poster</label>  
    <div class="col-md-4">
        <input id="poster" name="poster" placeholder="" value="{{isset($poster)? $poster : ""}}" class="form-control input-md" ="" type="text">
    </div>
</div>

<div class="form-group">
        <label class="col-md-4 control-label" for="name">Rated</label>  
    <div class="col-md-4">
        <input id="rated" name="rated" placeholder="" value="{{isset($rated)? $rated : ""}}" class="form-control input-md" ="" type="text">
    </div>
</div>

<div class="form-group">
        <label class="col-md-4 control-label" for="name">Released</label>  
    <div class="col-md-4">
        <input id="released" name="released" placeholder="" value="{{isset($released)? $released : ""}}" class="form-control input-md" ="" type="date">
    </div>
</div>

<div class="form-group">
        <label class="col-md-4 control-label" for="name">Runtime</label>  
    <div class="col-md-4">
        <input id="runtime" name="runtime" placeholder="" value="{{isset($runtime)? $runtime : ""}}" class="form-control input-md" ="" type="number">
    </div>
</div>

<div class="form-group">
        <label class="col-md-4 control-label" for="name">Title</label>  
    <div class="col-md-4">
        <input id="title" name="title" placeholder="" value="{{isset($title)? $title : ""}}" class="form-control input-md" ="" type="text">
    </div>
</div>

<div class="form-group">
        <label class="col-md-4 control-label" for="name">Type</label>  
    <div class="col-md-4">
        <input id="type" name="type" placeholder="" value="{{isset($type)? $type : ""}}" class="form-control input-md" ="" type="text">
    </div>
</div>

<div class="form-group">
        <label class="col-md-4 control-label" for="name">Writers</label>  
    <div class="col-md-4">
        <input id="writers" name="writers" placeholder="" value="{{isset($writers)? $writers : ""}}" class="form-control input-md" ="" type="text">
    </div>
</div>

<div class="form-group">
        <label class="col-md-4 control-label" for="name">Year</label>  
    <div class="col-md-4">
        <input id="year" name="year" placeholder="" value="{{isset($year)? $year : ""}}" class="form-control input-md" ="" type="number">
    </div>
</div>

<button class="btn btn-primary">Enviar</button>