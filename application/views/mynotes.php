<main>
	<?php 
		echo validation_errors();
	
		$form_attr=array("name"=>'notesForm',"id"=>'notesForm');
		echo form_open('webnotes/addnote', $form_attr); ?>
	
	<ul class="noteslist">
	<?php 
	$check_attr=array(
			'name' =>'notes[]',
			'class'=>'notebox',
		);
	foreach($notes as $notes_item):
		$check_attr['value']=$notes_item['id'];
	?>
		<li><?php echo form_checkbox($check_attr); ?>
		<?php echo nl2br(htmlspecialchars($notes_item["notes"]));?></li>
		<?php endforeach; ?>
	</ul>
	<?php
	if($this->login_model->logged_in()):
	?>
	<div id="notesInput">
		<?php $tarea_attr=array("name"=>"notesText", 'rows'=>'5', 'cols'=>'50', 'style'=>'display:block');
		echo form_textarea($tarea_attr); 
		$save_attr=array('name'=>'save','value'=>'Save');
		$del_attr=array('name'=>'del','value'=>'Delete');
		echo form_submit($save_attr);
		echo form_submit($del_attr);
		form_close();
		?>
	</div>
	<?php endif; ?>
</main>
