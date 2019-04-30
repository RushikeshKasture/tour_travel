<?php 
require_once('connection.php');
include_once('common.php');

$id = $_POST['id'];


?>
       <form method="POST" action="insert_category.php" onsubmit="validate()">
						<div class="form-group">
						
							<input type="text" name="category_name" id="category_name" class="form-control">
						</div>	  
						  
						
			<button type="submit" class="btn purple btn-sm form-control1"> Submit </button>
						
					   
				   </form>