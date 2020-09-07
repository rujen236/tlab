<!DOCTYPE html> 
<html> 
    <head>    
    <title>Laravel Demo</title>    
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"> 
    </head> 
    <body> 
        <div class="container"> 
        <nav class="navbar navbar-inverse">    
        <div class="navbar-header">        
        <a class="navbar-brand" href="#">Laravel</a>    
        </div>    
        <ul class="nav navbar-nav">        
        <li><a href="{{ URL::to('blog') }}">View All Batch</a></li>        
        <li><a href="{{ URL::to('blog/create') }}">Create Batch</a>    
        </ul> 
        </nav> 
        <h1>Create a Nerd</h1> {{ Form::open(array('url' => 'blog')) }} 
        <div class="form-group">        {{ Form::label('name', 'Name') }}        {{ Form::text('name',null,array('class' => 'form-control')) }}    
        </div> 
 
   {{ Form::submit('Create!', array('class' => 'btn btn-primary')) }} 
 
{{ Form::close() }} 
 
</div> 
</body> 
</html> 