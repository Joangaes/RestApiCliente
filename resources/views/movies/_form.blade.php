@csrf
<div class="form-group">
    <label class="col-md-4 control-label" for="title">Title</label>  
<div class="col-md-4">
    <input id="title" name="title" placeholder="" value="{{isset($title)? $title : ""}}" class="form-control input-md" ="" type="text">
</div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label" for="year">Year</label>  
<div class="col-md-4">
    <input id="year" name="year" placeholder="" value="{{isset($year)? $year : ""}}" class="form-control input-md" ="" type="number">
</div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label" for="imdb">Imdb</label>  
<div class="col-md-4">
    <input id="imdb" name="imdb" placeholder="" value="{{isset($imdb)? $imdb : ""}}" class="form-control input-md" ="" type="text">
</div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label" for="type">Type</label>  
<div class="col-md-4">
    <input id="imdb" name="type" placeholder="" value="{{isset($type)? $type : ""}}" class="form-control input-md" ="" type="text">
</div>
</div>

<div class="form-group">
    <button class="btn btn-primary" type="submit">Enviar</button>
</div>