@foreach($files as $file)<br>
<center>{{$file->id  }}
<center>{{$file->customer_name}}
<center><a href="/projects/{{$file->id}}">{{$file->username}}</a>
@endforeach
<br>
<button><a href="/projects/create" >Create details</a></button>
