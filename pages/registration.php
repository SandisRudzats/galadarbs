<br>
<br>
<br>

<?php
if(isset($_SESSION['registration_errors'])){
?>

<div class="alert alert-danger">
    <ul>
        <?php
            foreach($_SESSION['registration_errors'] as $errorMsg) {
                    echo '<li>' . $errorMsg . '</li>';
            } 
        ?>
    </ul>
</div>

<?php
unset($_SESSION['registration_errors']);
}
?>

<div class="container-fluid">
	<div class="row" id="breadcrumbColor">
		<div class="col-md-12"id="breadcrumbColor">
			<nav>
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="?">Home</a>
					</li>
					
					<li class="breadcrumb-item active">
						Registration
					</li>
				</ol>
			</nav>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-4">
<form action="registration_action.php" method="POST">
<div>
<label for="user_name"></label>
<input type="text" name="user_name" id="user_name" placeholder="Username* ">
</div>
<div>
<label for="first_name"></label>
<input type="text" name="first_name" id="first_name" placeholder="First name* ">
</div>
<div>
<label for="last_name"></label>
<input type="text" name="last_name" id="last_name" placeholder="Last name">
</div>
<div>
<div>
<label for="email" ></label>
<input type="text" name="email" id="email" placeholder="email">
</div>
<br>
<label for="password"></label>
<input type="password" name="password" id="password" placeholder="Password*">
</div>
<br>
<div>
<label for="password2"></label>
<input type="password" name="password2" id="password2" placeholder="repeat Password*">
</div>
<form class="form-inline">
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref"></label>
  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
    <option selected>Select your country</option>
    <option value="1">Katzlandia</option>
    <option value="2">Flatvia</option>
    <option value="3">Neverland</option>
		<option value="4">Not a fan of Michael Jackson</option>
  </select>
<input type="checkbox" name="checkbox" id="checkbox_id" value="value" required="">
    <label for="checkbox_id">Agree with terms and conditions*</label>
    <div>
<input type="submit" value="Register" >

</div>
</form>
		</div>
	</div>
</div>