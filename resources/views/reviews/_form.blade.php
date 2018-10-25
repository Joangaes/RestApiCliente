@csrf
<div class="form-group">
    <label class="col-md-4 control-label" for="title">Date</label>  
<div class="col-md-4">
    <input id="date" name="date" placeholder="" value="{{isset($date)? $date : ""}}" class="form-control input-md" ="" type="date">
</div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label" for="rating">Rating</label>  
<div class="col-md-4">
    <input id="rating" name="rating" placeholder="" value="{{isset($rating)? $rating : ""}}" class="form-control input-md" ="" type="number">
</div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label" for="reviewer">Reviewer</label>  
<div class="col-md-4">
    <input id="reviewer" name="reviewer" placeholder="" value="{{isset($reviewer)? $reviewer : ""}}" class="form-control input-md" ="" type="text">
</div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label" for="text">Text</label>  
<div class="col-md-4">
    <input id="text" name="text" placeholder="" value="{{isset($text)? $text : ""}}" class="form-control input-md" ="" type="text">
</div>
</div>

<div class="form-group">
    <button class="btn btn-primary" type="submit">Enviar</button>
</div>