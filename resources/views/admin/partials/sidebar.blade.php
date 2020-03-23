<div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                       CISP Admin
                    </a>
                </div>
        
                <ul class="nav">
                    <li  class="nav-item {{Request::path()==='admin/dashboard'?'active':''  }}" >
                        <a class="nav-link" href="{{ url('/admin/dashboard') }}">
                            <i class="nc-icon nc-layers-3"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item  {{Request::path()==='admin/blog'?'active':''  }} ">
                        <a class="nav-link" href="/admin/blog">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Blog</p>
                        </a>
                    </li>
                    <li class="nav-item  {{Request::path()==='admin/service'?'active':''  }} ">
                        <a class="nav-link" href="/admin/service">
                            <i class="nc-icon nc-spaceship"></i>
                            <p>Services</p>
                        </a>
                    </li>
                    <li class="nav-item  {{Request::path()==='admin/quotes'?'active':''  }} ">
                        <a class="nav-link" href="/admin/quotes">
                            <i class="nc-icon nc-email-85"></i>
                            <p>Quotes</p>
                        </a>
                    </li>
                  
                   
                
                </ul>
            </div>
        </div>