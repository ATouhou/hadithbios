<!DOCTYPE html>
<html lang="en">
<head>
  <title>Narrator and Transmitter Bios</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Narrator and Transmitter Bios</h2>
    <a href="{{ URL::to('home') }}" class="btn btn-primary" role="button">Back To List</a>    
    <form class="form-horizontal" role="form" action="{{ action('HomeController@postSave') }}" method="post">
        <div class="form-group" >
            <label class="control-label col-sm-2" for="name">Name of narrator / transmitter</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="name" value="{{ $row['name'] }}" />
            </div>                  
        </div>
        <div class="form-group" >
            <label class="control-label col-sm-2" for="date_of_birth">Date Of Birth</label>
            <div class="col-sm-10">
                <input class="form-control" type="date" name="date_of_birth" value="{{ $row['date_of_birth'] }}" />
            </div>                
        </div>
        <div class="form-group" >
            <label class="control-label col-sm-2" for="date_of_death">Date Of Death</label>
            <div class="col-sm-10">            
                <input class="form-control" type="date" name="date_of_death" value="{{ $row['date_of_death'] }}" />
            </div>                  
        </div>
        <div class="form-group" >
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default" name="submit"/>Subbmit</button>
            </div>
        </div>
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>        
    </form>
</div>

</body>
</html>
