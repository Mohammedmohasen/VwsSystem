
          <nav class="navbar navbar-expand-lg  navbar-light bg-light  shadow-lg sticky-top" >
              <a class="navbar-brand" href="#">    <img src="{{ asset('CSS/IUG_logo.png')}}" alt="Logo" style="width:60px; " class="float-md-right img-fluid ">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('home-page') }}">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://www.flickr.com/photos/iugaza/">Photo Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('Partners')}}">Partners in Success</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="{{ route('About') }}">About us<span class="sr-only">(current)</span></a>
                  </li>
                </ul>
              </div>
            </nav>