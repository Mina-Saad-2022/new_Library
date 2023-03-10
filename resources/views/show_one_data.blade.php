
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


<h3>The Book : {{$books-> id}} </h3>
<p>title : {{$books-> title}} </p>
<p>description : {{$books-> description}} </p>
<hr>
<a href="{{route('all_books')}}">Back</a>
