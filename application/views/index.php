
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<style type ="text/css">
  body{
    margin: 20px
  }
	input{
		display: inline-block;
		margin: 10px 10px 10px 0;
	}

	.posts{
		width: 400px;
		margin: 10px 10px 10px 0;
		vertical-align: top;
		display: inline-block;
		border: 1px solid silver;
		border-radius: 20px;
		padding: 20px;
		
	}
	p{
		color: green;
	}
  p.created_at{
    color: orange;
  }
  p.updated_at{
    color: blue;
  }
  p.post{
    color: black;
    font-size: 20px;
  }
	</style>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
   	<script>
      $(document).ready(function(){
      	$.get("/notes/index_html",function(res){
          //display notes
      		$('#notes').html(res);
      	});

      	$('form.create_form').submit(function(){
      		$.post('/notes/create',$(this).serialize(),function(res){
      			$('#notes').html(res);
      		});
          return false;
      	});     

      });//document ready
    </script>
</head>
<body>
  <h1>Notes</h1>
  <div id="notes">
    </div>
	<!-- remove the form action!!! otherwis it will insert into database twice! -->
    <form class = 'create_form' action = '/notes/create' method="post">   
      <!-- <p>
        <label>description</label><br>
        <textarea name="description"></textarea>
      </p> -->
      <p>
        <input type="text" name = "title" value = "insert title here">
      </p>
      <input type="submit" value="Add Note" class = "btn btn-success">
    </form>

    
  </body>
</html>