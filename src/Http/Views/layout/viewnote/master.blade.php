<!DOCTYPE html>
<html lang="{{$language}}" dir="ltr">

   <head>
      <meta charset="{{$charset}}">
      <title>{{$title}}</title>
      <!-- CSS only -->
      <link href="{{url('vitae/css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{url('vitae/css/mdi-6595.min.css')}}" rel="stylesheet">
      <link href="{{url('vitae/css/layout.ui.css')}}" rel="stylesheet">
   </head>

   <body>
      <main role="vitae" class="layout-md">

         <article class="vitae-body">

            <header class="vitae-header">

               <nav class="vitae-navbar">
                  <div class="navbar">
                     <a href="#" class="navbar-brand">
                        <i class="mdi mdi-home"></i> Home
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

               <!-- <section class="row">
                  <article class="col-3">
                     <img src="{{url("vitae/images/rlinares.png")}}" style="width:100%;" alt="@">
                  </article>
                  <article class="col-8">
                     <hgroup>
                        <h1>Ramon A Linares Febles</h1>
                        <h4>Full stack Developer</h4>
                     </hgroup>
                     <p>
                        Profesional con m??s de 10 a??os de experiencia en el desarrollo de aplicaciones corporativas para grandes y peque??as empresas.

                     </p>
                  </article>
               </section> -->
            </header>

            <section class="vitae-content">
               <nav class="vitae-nav">
                  <article class="box box-avatar">
                     <header class="box-header">
                        <img src="{{url("vitae/images/rlinares.png")}}" style="width:100%;" alt="@">
                     </header>
                     <section class="box-body">
                        <article class="block">
                           <h4>Name User</h4>
                           <p>Description User Degreed</p>
                        </article>
                     </section>
                  </article>

                  <article class="box">
                     <header class="box-header">
                        <h4>Title</h4>
                     </header>
                     <section class="box-body">
                        <article class="block">
                           Lorem ipsum dolor sit amet, consectetur adipisicing
                           elit, sed do eiusmod tempor incididunt ut labore et dolore
                           magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                           ullamco laboris nisi ut aliquip ex ea commodo consequat.
                           Duis aute irure dolor in reprehenderit in voluptate velit esse
                           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                           cupidatat non proident, sunt in culpa qui officia deserunt mollit
                           anim id est laborum.
                        </article>
                     </section>
                  </article>

               </nav>
               <article class="vitae-article">
                  <article class="box-group">
                     @for($i=0; $i <= 5; $i++)
                     <div class="box box-blog">
                        <div class="box-header">
                           <h4>Title</h4>
                        </div>
                        <div class="box-body">
                           <div class="block">
                              Lorem ipsum dolor sit amet, consectetur adipisicing
                              elit, sed do eiusmod tempor incididunt ut labore et dolore
                              magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                              ullamco laboris nisi ut aliquip ex ea commodo consequat.
                              Duis aute irure dolor in reprehenderit in voluptate velit esse
                              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                              cupidatat non proident, sunt in culpa qui officia deserunt mollit
                              anim id est laborum.
                           </div>
                        </div>
                     </div>
                     @endfor
                  </article>

               </article>
            </section>
         </article>

      </main>

      <script src="{{url('vitae/js/jquery-360.min.js')}}"></script>
      <script src="{{url('vitae/js/bootstrap.min.js')}}"></script>
      <script src="{{url('vitae/js/layout.ui.js')}}"></script>
   </body>

</html>
