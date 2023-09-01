<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Personal Data - Create</title>
</head>
<body style="background: blueviolet; color:white;">
    <form action="{{route('personal_data.update',$persons->id)}}" enctype="multipart/form-data" method="POST">
        @csrf
     <label for=""> Name</label><br>
     <input type="text" name="name" value="{{$persons->name}}" required><br>
     <label for=""> Address</label>    <br>
     <input type="text" name="address" value="{{$persons->address}}" required >    <br>

     <label for="fusk"> photo</label> <br>
     <input  id="fusk" type="file" name="photo" value="{{$persons->photo}}" required >    <br>

     <label for=""> status</label>  <br>
     <select name="status" id="" value="{{$persons->is_married}}" required>
        <option value="yes">married</option>
        <option value="no">not-married</option>
     </select>
     <br>

      <button type="submit" class="btn btn-success">Update</button> 
    </form>
</body>
</html>