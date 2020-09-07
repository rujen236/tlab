<!DOCTYPE html> 
<html> 
    <head>    
    <title>Laravel Demo</title> 
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"> </head> <body> <div class="container"> 
    <nav class="navbar navbar-inverse">    
    <div class="navbar-header">        
    <a class="navbar-brand" href="#">Laravel</a>    
    </div>    
    <ul class="nav navbar-nav">        
    <li><a href="{{ URL::to('blog') }}">View All Blog</a></li>        
    <li><a href="{{ URL::to('blog/create') }}">Create Blog</a>    
    </ul> </nav> 
    <h1>Edit {{ $blog->name }}</h1> 
 
<!-- if there are creation errors, they will show here --> {{ Html::ul($errors->all()) }} 
 
{{ Form::model($blog, array('route' => array('blog.update', $blog->id), 'method' => 'PUT')) }} 
 
   <div class="form-group">        {{ Form::label('name', 'Name') }}        {{ Form::text('name', null, array('class' => 'form-control')) }} </div> 
 
   {{ Form::submit('Edit the Blog!', array('class' => 'btn btn-primary')) }} 
 
{{ Form::close() }} 
 
</div> 
</body> 
</html> 