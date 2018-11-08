<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>hello, <?= $name, $age; ?></h1>
        <!-- Echo $name; -->

        <ul>

        	@foreach ($tasks as $task)

        	  <!--  <li>{{ $task }}</li> -->

        	   <li>{{ $task->body }}</li>
        	   <!-- table_db.php の$table->text('body');を示す -->

        	@endforeach   

        	<!-- <?php foreach ($tasks as $task): ?>

        	   <li><?= $task; ?></li>
        		
        	<?php endforeach; ?> -->
        </ul>
</body>
</html>

<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	  @extends('layout')
  <?php 
   
// <!-- layout.blade.phpで 
	// ('content')="My first website"
	// 　　　　　　　　表示させるため-->

     
?>
  @section('content')
       <h1>My first website</h1>
     @endsection  
     // <!-('content')="My first website"-->

 <!--  <ul>
    <?php foreach ($tasks as $task) ; ?>    
     <!- 繰り返し　　定義　　　出力   
      <li><?= $task; ?></li> --> -->
       <!-- 出力する -->

      <!--  @foreach ($task as $task)    Used: '@''Same to up one!

              <li>({ $tasks })</li>

       @endforeach  --> 
<!-- 
    // <?php  ?>   
  </ul>

</body>
</html> -->

  