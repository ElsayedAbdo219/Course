<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Personal Data - Show</title>
</head>
<body style="background: blueviolet; color:white;">
    

    <table class="table">
        <thead >
           
          <tr>
            <th scope="col">ID</th>
            <th scope="col">NAME</th>
            <th scope="col">ADDRESS</th>
            <th scope="col">AVATER</th>
            <th scope="col">Status</th>
            <th scope="col">Time</th>
            <th scope="col">action</th>
            <th><a href="{{route('personal_data.create')}}" class="btn btn-success">Create New</a></th>
          </tr>
        </thead>
        <tbody>
            @forelse ($persons as $person)
                
           
          <tr>
            <th scope="row">{{$person->id}}</th>
            <td>{{$person->name}}</td>
            <td>{{$person->address}}</td>
            <td><img src="{{asset('images/'.$person->photo)}}" alt="personal_account"/></td>
            <td>{{$person->is_married}}</td>
            <td>{{$person->created_at}}</td>
            <td>
              <a href="{{route('personal_data.edit',$person->id)}}" class="btn btn-success">Edit</a>
              <a href="{{route('personal_data.destroy',$person->id)}}" class="btn btn-danger">Delete</a>
              <a href="{{url('/send')}}" class="btn btn-danger">Send Sms</a>
            </td>
           
          </tr>
          @empty
          <h1 class="text-warning">There No Data</h1>
          @endforelse
        </tbody>
      </table>













<script>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</script>
</body>
</html>