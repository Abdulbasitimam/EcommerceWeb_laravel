<header class="header_section">
<style>
  .search-bar {
        position: relative;
    }

    #search-results {
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: white;
        border: 1px solid #ccc;
        z-index: 1000;
        display: none;
    }

    .dropdown-item {
        padding: 10px;
        cursor: pointer;
    }

    .dropdown-item:hover {
        background-color:rgb(245, 250, 255);
    }
</style>

      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <span>
            My Store
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
           </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="shop.html">
                Shop
              </a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" href="why.html">
                Why Us
              </a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="testimonial.html">
                Testimonial
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact Us</a>
            </li>
          </ul>
          <div class="user_option">
          @if (Route::has('login'))


          @auth
          <a href="{{url('mycart')}}">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
              [{{$count}}]
            </a>
          <form style="padding: 15px" method="POST" action="{{ route('logout') }}">
                            @csrf
                            <input class="btn btn-success" type="submit" value="Logout">
                        </form>

                        @else


            <a href="{{url('/login')}}">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>
                Login
              </span>
            </a>
            <a href="{{url('/register')}}">
              <i class="fa fa-vcard" aria-hidden="true"></i>
              <span>
                Register
              </span>
            </a>

            <div class="search-bar">
    <input
        type="text"
        id="search-input"
        class="form-control"
        placeholder="Search products..."
        onkeyup="searchProducts()"
    />
    <div id="search-results" class="dropdown-menu"></div>  
    
</div>
            @endauth
            @endif
           
            
            
          </div>
        </div>
      </nav>
    </header>


    