<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
    <body>
    	<div class="content">
    		<div class="title m-b-md">
    		<p>About Us</p>

                @unless($bitfumes)
                    There is no data
                @endunless  <!--web.php 以外にも $bitfumes 定義できる  "There is no data" と出力される-->


                @foreach ($bitfumes as $bitfume)
                    {{$bitfume}} <!-- web.php: $bitfumes = ['This','is','bitfumes']; This is bitfumes 出力-->
                @endforeach
            </div>

        </div>        

    
</body>
</html>