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
      <a href="home/input" class="btn btn-primary" role="button">Add New Bio</a>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Name</th>
            <th>Date Of Birth</th>
            <th>Date Of Death</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($hadithBios as $bio)
          <tr>
            <td>{{ $bio['name'] }}</td>
            <td>{{ $bio['date_of_birth'] }}</td>
            <td>{{ $bio['date_of_death'] }}</td>
          </tr>
          @endforeach          
        </tbody>
      </table>    
</div>

</body>
</html>
