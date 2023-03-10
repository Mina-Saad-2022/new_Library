
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


<h3>All Books</h3>

<table class="table table-striped table-dark">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">title</th>
        <th scope="col">description</th>
        <th scope="col">image</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        @foreach($books as $book)
        <th>  {{$book-> id}}</th>
        <td>    {{$book-> title}}  </td>
        <td>    {{$book-> description}} </td>
        <td>  {{$book-> image}} </td>
          @endforeach
    </tr>

    </tbody>
</table>




