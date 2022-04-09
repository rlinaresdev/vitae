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
      <main role="vitae" class="vitae-layout-lg">
         <nav class="vitae-navbar">
            <div class="navbar navbar-light border-bottom">
               <a href="#" class="navbar-brand">
                  <i class="mdi mdi-home"></i> Home
               </a>

               <div class="nav vitae-nav-right ml-auto">

                  <a href="{{url("/")}}" class="nav-link">Personal</a>
                  <a href="{{url("/notes")}}" class="nav-link">Anotaciones</a>

                  <div class="nav-item dropdown">
                     <a href="#" class="nav-link dropdown-toggle"
                        id="dropdownTool"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="mdi mdi-dot-net"></i>
                     </a>
                     <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownTool">
                        <li>
                           <a href="#" class="dropdown-item">Link</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </nav>

         <article class="vitae-body">
            <section class="row">
               <article class="col-4">
                  <img src="{{url("vitae/images/linares.png")}}" width="180" alt="@">
               </article>
               <article class="col-8">
                  <hgroup>
                     <h1>Ramon A Linares Febles</h1>
                     <h4>Full stack Developer </h4>
                  </hgroup>
                  <p>
                     Profesional con más de 10 años de experiencia en el desarrollo de aplicaciones corporativas para grandes y pequeñas empresas.
                  </p>
               </article>
            </section>
         </article>

      </main>

      <script src="{{url('vitae/js/jquery-360.min.js')}}"></script>
      <script src="{{url('vitae/js/bootstrap.min.js')}}"></script>
      <script src="{{url('vitae/js/layout.ui.js')}}"></script>
   </body>

</html>
