<!DOCTYPE html>
<html lang="{{$language}}" dir="ltr">

   <head>
      <meta charset="{{$charset}}">
      <title>{{$title}}</title>
      <link href="{{url('vitae/css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{url('vitae/css/mdi-6595.min.css')}}" rel="stylesheet">
      <link href="{{url('vitae/css/layout.ui.css')}}" rel="stylesheet">
   </head>

   <body>

      <article class="container">

         <nav class="navbar navbar-light border-bottom">
            <div class="nav">
               <a href="{{url("/")}}" class="nav-link">Personal</a>
               <a href="{{url("/notes")}}" class="nav-link">Anotaciones</a>
            </div>

            <div class="nav ml-auto">
               <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle"
                     id="dropdownTool"
                     data-toggle="dropdown"
                     aria-expanded="false">
                     Link
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownTool">
                     <li>
                        <a href="#" class="dropdown-item">Link</a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>

         @yield("body")

      </article>

      <script src="{{url('vitae/js/bootstrap.min.js')}}"></script>
      <script src="{{url('vitae/js/jquery-360.min.js')}}"></script>
      <script src="{{url('vitae/js/layout.ui.js')}}"></script>
   </body>

</html>
