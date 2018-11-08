<!DOCTYPE html>
<html lang="en">
<head>
  <title>User List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>User List</h2>

      <a href="" class="btn btn-success">Add New</a>      
    <table class="table table-striped">
    <thead>

    <!-- [ID,Name,Email,action]　項目 -->
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>profile</th>
        <th>Status</th>
        <th>User Role</th>
      </tr>
    </thead>

    <!--  @goreach $users-> [ID,Name,Email,action] 何度も受け取る
          何度も     ユーザー    項目受け取る　-->
    <tbody>
        @foreach($user as $users)
        <tr>
            <td>{{$users->id}}</td>
            <td>{{$users->name}}</td>
            <td>{{$users->email}}</td>
            <td>{{$users->profile}}</td>

            <!-- $usersのデータが Usersテーブルの カラム[status]
            が1以上なら Enable
            1以下なら Disable -->
            <td>
                @if($users->status==1)
                    Enable
                @else
                    Disable
                @endif
            </td>         


              <!-- [Edit], [Delete] link! -->
             <a href="" title="" class="btn btn-success">Edit</a>
             <a href="" title="" class="btn btn-warning">Delete</a>
            </td> 
        </tr>
           

        @endforeach
    </tbody>
    </table>
</div>
</body>
</html>
