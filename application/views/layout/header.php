<html>
<head>
	<title>My notes</title>
	<link rel="stylesheet" href="<?php echo base_url("public/notes.css");?>"  type="text/css">
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="notesJS.js"></script>
	<script>
	$(function(){
	 $('.nav-toggle, .noteslist').on('click',function(){
	  $('.main-navigation').toggleClass('open');
	  });
	});
	</script>
	<link href="<?php echo base_url();?>public/webcss.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
	<header>
	<i class="fa fa-bars nav-toggle"></i> 
	<h1 class="site-title">My Site</h1>
	<nav class="main-navigation">
	<ul>
	<li><a href="index">Home</a></li>
	<li><a href="notes">My Notes</a></li>
	</ul>
	</nav>
	
	<div class='login'>
	<?php
	if($this->login_model->logged_in()):
		echo form_open('login/logout');
		echo "Welcome to your notes, ".$this->session->userdata('username').".   ";
		echo form_submit('Logout', 'Log Out');
		echo form_close();
	else:
		echo form_open('login/validate');
	?>
		<label for='username'> User </label>
		<input type='text' name='username' size='10px'>	
		
		<label for='password'> Password </label>
		<input type='password' name='password' size='10px'>
		
		<input type='submit' name='log_in' value='Log in'>
		</form>
	</div>
	<?php endif; ?>
	
</header>


