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

         <section class="vitae-body">

            <header class="vitae-body-header">
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
               <section class="row">
                  <article class="col-3">
                     <img src="{{url("vitae/images/rlinares.png")}}" style="width:100%;" alt="@">
                  </article>
                  <article class="col-8">
                     <hgroup>
                        <h1>Ramon A Linares Febles</h1>
                        <h4>Full stack Developer</h4>
                     </hgroup>
                     <p>
                        Profesional con más de 10 años de experiencia en el desarrollo de aplicaciones corporativas para grandes y pequeñas empresas.

                     </p>
                  </article>
               </section>
            </header>

            <article class="vitae-content">
               @for($i=0; $i <= 1; $i++)
               <article class="px-2 pb-2">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                  enim ad minim veniam, quis nostrud exercitation ullamco laboris
                  nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                  reprehenderit in voluptate velit esse cillum dolore eu fugiat
                  nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                  sunt in culpa qui officia deserunt mollit anim id est laborum.
               </article>
               @endfor
            </article>

         </section>

      </main>

      <script src="{{url('vitae/js/jquery-360.min.js')}}"></script>
      <script src="{{url('vitae/js/bootstrap.min.js')}}"></script>
      <script src="{{url('vitae/js/layout.ui.js')}}"></script>
      <script type="text/javascript">
         // var txtm = document.querySelector(".vitae-body-header");
         //    console.log(inClassItem(txtm, "spand"));
         //
         //    function inClassItem(item, style) {
         //       for (var i = 0; i < item.classList.length; i++) {
         //          if(item.classList[i] == style ) {
         //             return true;
         //          }
         //       }
         //       return false;
         //    }
         //console.log(document.querySelector(".vitae-body-header").classList);
      </script>
   </body>

</html>
