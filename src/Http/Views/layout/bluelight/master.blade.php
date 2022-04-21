<!DOCTYPE html>
<html lang="{{$language}}" dir="ltr">

   <head>
      <meta charset="{{$charset}}">
      <title>{{$title}}</title>
      <!-- CSS only -->
      <link href="{{$skin->url('css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{$skin->url('css/mdi-6595.min.css')}}" rel="stylesheet">
      <link href="{{$skin->url('css/layout.ui.css')}}" rel="stylesheet">
   </head>

   <body>
      <main role="bluelight" class="layout-md">
         <nav class="bluelight-nav">
            <a href="#">
               <img src="{{$skin->url('images/iipec.png')}}" width="42" height="42" alt="@">
            </a>
         </nav>

         <section class="bluelight-body">
            <nav class="bluelight-navbar">
               <div class="navbar">
                  <a href="#" class="navbar-brand">
                     Inicio
                  </a>
                  <ul class="nav vitae-nav-right ml-auto">

                     <li class="nav-item dropdown">

                        <a href="#" class="nav-link dropdown-toggle"
                           id="dropdownTool"
                           data-bs-toggle="dropdown"
                           aria-expanded="false">
                           <i class="mdi mdi-dot-net"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownTool">
                           <li>
                              <a href="https://github.com/rlinaresdev" target="_blank" class="dropdown-item">
                                 <span class="mdi mdi-github" target="_blank"></span> Github
                              </a>
                              <a href="https://www.linkedin.com/in/linaresdev/" target="_blank" class="dropdown-item">
                                 <span class="mdi mdi-linkedin"></span> Linkedin
                              </a>
                              <a href="https://www.facebook.com/linaresdev/" target="_blank" class="dropdown-item">
                                 <span class="mdi mdi-facebook"></span> Facebook
                              </a>
                              <a href="https://twitter.com/linaresdev" target="_blank" class="dropdown-item">
                                 <span class="mdi mdi-twitter"></span> Twitter
                              </a>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </nav>

            @for($i=0; $i <= 5; $i++)
            <article class="box box-light">
               <header class="box-header">
                  <h4>Extrato descriptivo o titulo amplio de la publicacion</h4>
                  <div class="meta">
                     <strong>Publicado:</strong> 21/04/2022
                  </div>
               </header>
               <section class="box-body">
                  <article class="block">
                     <img src="{{$skin->url('images/user.png')}}" class="image" alt="@">
                     {!! Str::limit("
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                        200, null
                     ) !!}
                     <a href="#" class="btn btn-outline-primary btn-sm">
                        Leer mas...
                     </a>
                  </article>
                  <article class="block">
                     <strong>Autor</strong> Ramon A Linares
                  </article>
               </section>
            </article>
            @endfor
         </section>

         <aside class="bluelight-aside">
            Aside
         </aside>
      </main>
      <script src="{{$skin->url('js/jquery-360.min.js')}}"></script>
      <script src="{{$skin->url('js/bootstrap.min.js')}}"></script>
      <script src="{{$skin->url('js/layout.ui.js')}}"></script>
   </body>
</html>
