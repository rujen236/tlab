@extends('layouts.app')

@section('content')
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Blog</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login') }}">Login</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/register') }}">Sign Up</a>
                </li>

            <!--  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
         -->
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Blog Website</h1>
                <p class="lead">A blog is a discussion or informational website published on the World Wide Web consisting of discrete, often informal diary-style text entries (posts). Posts are typically displayed in reverse chronological order, so that the most recent post appears first, at the top of the web page. Until 2009, blogs were usually the work of a single individual,[citation needed] occasionally of a small group, and often covered a single subject or topic. In the 2010s, "multi-author blogs" (MABs) emerged, featuring the writing of multiple authors and sometimes professionally edited. MABs from newspapers, other media outlets, universities, think tanks, advocacy groups, and similar institutions account for an increasing quantity of blog traffic. The rise of Twitter and other "microblogging" systems helps integrate MABs and single-author blogs into the news media. Blog can also be used as a verb, meaning to maintain or add content to a blog.</p>
        </div>
        </div>
    
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image/wallpaper-765153.jpg" class="d-block w-100" alt="">
                </div>
                <div class="carousel-item">
                <img src="image/iron-man-ultra-hd-wallpapers.jpg" class="d-block w-100" alt="">
                </div>
                <div class="carousel-item">
                    <img src="image/the-armors-of-iron-man-poster-from-hot-toys-mifty-is-bored.jpg" class="d-block w-100" alt="">
                </div>
            </div>
        </div>
{{-- 
        @foreach($blogs as $blog)
                
        <div class="card">
            <div class="card-header">
                {{ $blog->Title }}
            </div>
            <div class="card-body">
                <img src="image/.jpg" alt="" class="rounded">
                <!-- <img src="..." alt="..." class="img-thumbnail"> -->
                <p class="card-text">{{ $blog->Content }}</p>
                <p class="card-text">Created by {{ $blog->name }}</p>
                <a href="#" class="btn btn-primary">Read More</a>
                <br>
            </div>
        </div>
        
        @endforeach

        <h3 class="pb-4 mb-4 font-italic border-bottom">
            From the Firehouse
        </h3>

        <div id="footer">
            <!-- <img src="image/243237.jpg" class="img-fluid" alt="Responsive image"> -->
            <p>
                "Blog template built for "
                <a href="">Bootstrap</a>
                " by "
                <a href="">@mdo</a>
                "."
            </p>
            <p>
                <a href="#">Back to top</a>
            </p>
        </div>
    </div> --}}
</div>
</body>
@endsection
