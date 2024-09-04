<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">


<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 50%;
  border: 1px solid ;
  margin: auto;
}

th, td {
  text-align: center;
  padding: 5px;
  border: 2px solid ;
}

table.table td a.edit {
color: #FFC107;
}
table.table td a.delete {
color: #E34724;
}
.container{
  text-align: center;
  width: 500px;
}
.card{
  width: 500px;
  height: 500px;
}
tr:nth-child(even){background-color:#f2f2f2}
#head{
  text-align: center;
  font-size: 2em;
  padding: 1em;
}
.col-6{
  border: 1px solid;
}
</style>
</head>
<body>
@if(session()->has('alert'))
<div class="alert alert-success">

 {{ session()->get('alert')}}
</div>
@endif

<!-- for delete  confirmation -->

@if(session()->has('msg'))
<div class="alert alert-success">

 {{ session()->get('msg')}}
</div>
@endif
<!-- for register confirmation-->
<!-- @if(session()->has('message')) -->
<!-- <div class="alert alert-success"> -->

 <!-- {{ session()->get('message')}} -->
<!-- </div> -->
<!-- @endif -->
<!-- for update confirmation-->
@if(session()->has('update'))
<div class="alert alert-success ">
 {{ session()->get('update')}}
</div>
@endif

<div class="container">
  <div class="card ">
    <div class="card body">
    <h2 id="head"><u>Students Primary list</u></h2>
    <div style="overflow-x:auto;"  >
  <table >
    <thead>
    <tr>
    <th >id</th>
  <th >firstname</th>
      <th >action</th>
    </tr>
    </thead>
    <tbody>
   @foreach($stud_primary_info as $key=> $primary)

     <tr>
       <td>{{$key+1}}</td>
       <td>{{$primary->firstname}}</td>
       <td> 
        <a class="view" title="view" data-toggle="tooltip" href="{{route('view',$primary->id)}}"><i class="material-icons">&#xe8f4;</i></a>
        <a class="edit" title="Edit" data-toggle="tooltip" href="{{route('edit',$primary->id)}}" ><i class="material-icons">&#xE254;</i></a>
        <a class="delete" title="Delete" data-toggle="tooltip" href="{{route('delete',$primary->id)}}" onclick="return confirm('Are you sure you want to delete {{$primary->firstname}}?')"><i class="material-icons">&#xE872;</i></a></td>
   @endforeach
    </tr> 
</tbody>
</table>
</div>
</div>
</div>
<div>
<a href="{{Route('home')}}" type="button" class="mt-4 btn bg-primary text-dark bg-opacity-50">Back</a>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

