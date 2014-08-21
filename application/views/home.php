<main>
<?php
if($this->login_model->logged_in()){
	echo "You have logged in as ".$this->session->userdata('username')." You may add or delete the notes.";
}
else{
	echo "You have not logged in yet. You may only read the notes for now.";
}
?>
</main>