<!DOCTPE html>
<html>

<html>
   
   <head>
      <title>View Student Records</title>
   </head>
   
   <body>
   @foreach ($users as $user)
   <br>
<h1>{{$user->title}}</h1>
<br>
<p>{{$user->description}}<p>

@endforeach
   </body>
</html>