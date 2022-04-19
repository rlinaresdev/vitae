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
            Nav
         </nav>

         <section class="bluelight-body">
            Content
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
