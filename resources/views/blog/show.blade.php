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
        <li><a href="{{ URL::to('blog') }}">View All Blog</a></li>        
        <li><a href="{{ URL::to('blog/create') }}">Create Blog</a>    
        </ul> 
        </nav> 
        <h1>Showing {{ $blog->name }}</h1>    
        <div class="jumbotron text-center">        
        <h2>{{ $blog->name }}</h2>        
        <p>            
        <strong>Name:</strong> {{ $blog->name }}<br>        
        </p>    
        </div> 
        </div> 
        </body> 
        </html> 
 