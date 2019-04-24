<header>           
    <div class="container">
            <div class="row header">
                <div class="col-xs-12 col-sm-8 logo">
                    <a class="logo-img" href="">
                        <img class="img-responsive" src=" {{asset('img/logo.png')}}" alt="BD Model Test" />    
                    </a>
                    <div class="site-title">
                        <h1><a href="">{{$headline}}</a></h1>
                        <p>{{$slogan}}</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 pull-right">
                    <p class="log-reg pull-right">
                        
                        <a href="{{url('/login')}}">Login</a> <span>|</span><a href="  {{url('/create')}} ">Registration</a>
                        
                        <a href="{{url('logout')}}">Logout</a>
                        
                        </p>
                    <p class="fa fa-phone pull-right clr-both"><span>01719287625</span></p>
                </div>
            </div>
        </div>
        
        <div class="social-icons">
            <ul>
                <li>
                    <a class="btn btn-social-icon btn-facebook btn-xs" href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                    <a class="btn btn-social-icon btn-google-plus btn-xs" href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
                </li>
                <li>
                    <a class="btn btn-social-icon btn-twitter btn-xs" href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                </li>
            </ul>
        </div>                                        
</header>