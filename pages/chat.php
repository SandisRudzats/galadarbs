<br>
  <br>
  <br>
  
  <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav>
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="?">Home</a>
					</li>
					
					<li class="breadcrumb-item active">
						Chat
					</li>
				</ol>
			</nav>
		</div>
	</div>
</div>
<?php
if($_POST) {
    $name = $_POST['name'];
    $content = $_POST['commentContent'];
    $handle = fopen("comments.php","a");
    fwrite($handle,"<b>" . $name . "</b>:<br/>" . $content . "<br>" . date("D M d, Y G:i a") . "<br>" . "<hr>");
    fclose($handle);
}
?>

    <div class="container-fluid" id="chatBox" >
        <div class="row">
    <div class="col-12" class="chatbox">
<?php include "comments.php"; ?>
</div>

</div>
</div>
<div class="container-fluid" id="chatForm" >
	<div class="row">
		<div class="col-md-12"  >
			 
    <form action="" method="POST" >
    Comments: <textarea  name = "commentContent"></textarea><br>  
    Name: <input type="text" name="name" ><br>
    <input type="submit" value="Post!" ><br>
    
    </form>
    </div>
	</div>
</div>
<script src="main.js"></script>
