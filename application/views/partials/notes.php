<header>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script>
      $(document).ready(function(){

        $('form.form_delete').submit(function(){
          $.post('/notes/delete_note',$(this).serialize(),function(res){
            $('#notes').html(res);
          });
          return false;
        });

        $('p.description').click(function(){
          var text = $(this).text();
          var str = "";
          str+="<textarea name = 'description'>";
          str+=text;
          str+="</textarea><br>"
          $(this).replaceWith(str);
        });

        $('h3.title').click(function(){
          var text = $(this).text();
          var str = "";
          str+="<input type='text' name = 'title' value ="+'\''+text+'\''+">";
          str+="<br>"
          $(this).replaceWith(str);
        });

        $('form.form_update_title').submit(function(){
          $.post('/notes/update_title',$(this).serialize(),function(res){
            $('#notes').html(res);
          });
          return false;
        });

        $('form.form_update_description').submit(function(){
          $.post('/notes/update_description',$(this).serialize(),function(res){
            $('#notes').html(res);
          });
          return false;
        });

      });//document ready
    </script>
</header>
<?php
  foreach($notes as $note)
  {  ?>
    <div class="notes">
        
        <h4>id: <?= $note['id'] ?></h4>
        	<form action = "/notes/delete_note" class = "form_delete" method = "post">
        		<input type="hidden" name = "id" value = '<?= $note['id'] ?>'>
        		<input type="submit" class = 'btn btn-danger' value = "delete">
        	</form>
        
        	<form action = "/notes/update_title" class = "form_update_title" method = "post">
        		<input type="hidden" name = "id" value = '<?= $note['id'] ?>'>
        		<h3 class = 'title'><?= $note['title'] ?></h3>
        		
        		<input type="submit" class = 'btn btn-info' value = "update title">
        	</form>
        	
        	<br>
        	<form action = "/notes/update_description" class = "form_update_description" method = "post">
        		<input type="hidden" name = "id" value = '<?= $note['id'] ?>'>
        		<p class = "description">><?= $note['description'] ?></p>
        		<input type="submit" class = 'btn btn-warning' value = "update description">
        	</form>
        
        <p class = 'created_at'>wrote at: <?= $note['created_at'] ?></p>
    	<p class = 'updated_at'>updated at: <?= $note['updated_at'] ?></p>
    	<hr>

    </div>
<?php
  }  ?>