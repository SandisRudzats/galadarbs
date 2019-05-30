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
        <div class="row" id="chatBackground">
    <div class="col-12" class="chatBoxInner">
<?php include "comments.php"; ?>
</div>
<div class="container-fluid" id="chatForm" >
	<div class="row" id="chatBackground">
		<div class="col-md-4"  >
			 <div class="chatBottom">
    <form action="" method="POST" class="something" >
    
    <input type="text" name="name" placeholder="name"><br>
    <br>
    <input type="text" name="commentContent" placeholder="Input your message here:"><br>
    
    <br>
    <input type="submit" value="Post!" id="inputButton" ><br>
    
    </form>
    </div> 
</div>
</div>

    </div>
	</div>
</div>
<script src="main.js"></script>
