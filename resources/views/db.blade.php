<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
<title>User Database</title>
<h1>User Information</h1>
</head>
<body>
<table class="container">
	<thead>
     <div>
      <a href="{{URL::to('/')}}" class="btn btn-primary">New Registration</a>
     </div>
		<tr>
      <th><h1>ID</h1></th>
			<th><h1>Username</h1></th>
			<th><h1>Email</h1></th>
			<th><h1>Password</h1></th>
			<th><h1>Date of birth</h1></th>
      <th><h1>City</h1></th>
      <th><h1>Country</h1></th>
      <th><h1>Status</h1></th>
      <th><h1>Action</h1></th>
		</tr>
	</thead>
	<tbody>
@foreach($user_info as $v_user)    		
		<tr>
      <td>{{$v_user->id}}</td>
			<td>{{$v_user->username}}</td>
			<td>{{$v_user->email}}</td>
			<td>{{$v_user->password}}</td>
			<td>{{$v_user->date_of_birth}}</td>
      <td>{{$v_user->city}}</td>
      <td>{{$v_user->country}}</td>
      <td>{{$v_user->status}}</td>
      <td>
      <a href="{{URL::to('/edit_user/'.$v_user->id)}}" class="btn btn-info">Edit</a>
        <a href="{{URL::to('/delete_user/'.$v_user->id)}}" class="btn btn-danger">Delete</a>
        

      </td>
		</tr>
		
@endforeach()   
	</tbody>
</table>
</body>





<style>

@charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#A7A1AE;
  background-color:#1F2739;
}

h1 {
  font-family: 'Nunito', sans-serif;
  font-size:3em; 
  padding: 6px;
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color: #4DC3FA;
}

h2 {
  font-size:1em; 
  font-weight: 300;
  text-align: center;
  display: block;
  line-height:1em;
  padding-bottom: 2em;
  color: #FB667A;
}

div
{
  position:center;
  padding-left: 617px;
  height: 2.5em;
}

.blue { color: #185875; }
.yellow { color: #FFF842; }

.container th h1 {
	  font-weight: bold;
	  font-size: 1em;
  text-align: left;
  color: #185875;
}

.container td {
	  font-weight: normal;
	  font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
	   -moz-box-shadow: 0 2px 2px -2px #0E1119;
	        box-shadow: 0 2px 2px -2px #0E1119;
}
a:link {
  background-color: transparent;
  text-decoration: none;
}
.container {
	  text-align: left;
	  overflow: hidden;
	  width: 90%;
	  margin: 0 auto;
  display: table;
  padding: 0 0 8em 0;
}

.container td, .container th {
	  padding-bottom: 2%;
	  padding-top: 2%;
  padding-left:2%;  
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
	  background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
	  background-color: #2C3446;
}

.container th {
	  background-color: #1F2739;
}

.container td:first-child { color: #FB667A; }

.container tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
	   -moz-box-shadow: 0 6px 6px -6px #0E1119;
	        box-shadow: 0 6px 6px -6px #0E1119;
}



@media (max-width: 800px) {
.container td:nth-child(4),
.container th:nth-child(4) { display: none; }
}
