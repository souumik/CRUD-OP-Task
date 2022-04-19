<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Form</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <title>Edit</title>
    </head>
    <body>
     
      <form method="POST" action="{{ url('edit_info',[$data->id]) }}">
        {{ csrf_field() }}
        <h1>Edit User</h1>
        
        <fieldset>
          <label for="name">Username:</label>
          <input type="text" id="" name="username" value="<?php echo $data->username?>" placeholder="Enter username">
          
          <label for="mail">Email:</label>
          <input type="email" id="" name="email" value="<?php echo $data->email?>" placeholder="Enter a valid email">
          
          <label for="password">Password:</label>
          <input type="password" id="" name="password" value="<?php echo $data->password?>" placeholder="Enter password">

          <label for="date">Date of birth</label>
          <input type="date" id="" name="date_of_birth" value="<?php echo $data->date_of_birth?>">

          <label for="city">City:</label>
          <input type="text" id="" name="city" placeholder="Enter your city" value="<?php echo $data->city?>">

          <label for="country">Country:</label>
          <input type="text" id="" name="country" placeholder="Enter your country" value="<?php echo $data->country?>">
          
          <label>Status:</label>
          <input type="radio" id="" value="active" name="status" {{($data->status=="active") ? "checked": ""}}><label for="active" class="light">Active</label><br>
          <input type="radio" id="" value="inactive" name="status" {{($data->status=="inactive") ? "checked": ""}}><label for="inactive" class="light">Inactive</label>
          
        </fieldset>
    
        <button type="submit">Update Info</button>
        
      </form>
      
    </body>
</html>















<style>
*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Nunito', sans-serif;
  color: #384047;
  background-color: #767b85;
}

form {
  max-width: 300px;
  margin: 10px auto;
  padding: 10px 20px;
  background: #f4f7f8;
  border-radius: 8px;
}

h1 {
  margin: 0 0 30px 0;
  text-align: center;
}


input[type="text"],
input[type="password"],
input[type="date"],
input[type="datetime"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="time"],
input[type="url"],
textarea,
select {
  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 16px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 15px;
  width: 100%;
  background-color: #e8eeef;
  color: #191970;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
}

input[type="radio"],
input[type="checkbox"] {
  margin: 0 4px 8px 0;
}

select {
  padding: 6px;
  height: 32px;
  border-radius: 2px;
}

button {
  padding: 19px 39px 18px 39px;
  color: #FFF;
  background-color: #4bc970;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 100%;
  border: 1px solid #3ac162;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}
button:hover
{
    background-color: #28732b;
    cursor: pointer;
}

fieldset {
  margin-bottom: 30px;
  border: none;
}

legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 8px;
}

label.light {
  font-weight: 300;
  display: inline;
}

.number {
  background-color: #5fcf80;
  color: #fff;
  height: 30px;
  width: 30px;
  display: inline-block;
  font-size: 0.8em;
  margin-right: 4px;
  line-height: 30px;
  text-align: center;
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
  border-radius: 100%;
}

@media screen and (min-width: 480px) {

  form {
    max-width: 480px;
  }

}
</style> 


</html>