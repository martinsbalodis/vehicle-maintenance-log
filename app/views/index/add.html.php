<?=$this->form->create(); ?>
	<?=$this->form->field('name');?>
	<?=$this->form->field('surname');?>
	<?=$this->form->field('mark');?>
	<?=$this->form->field('model');?>
	<?=$this->form->field('vehicle_reg_number');?>
	<?=$this->form->field('maintance_date');?>
	<?=$this->form->field('maintance_length');?>
	<?=$this->form->field('milage');?>
	<?=$this->form->field('maintance_comment', array('type' => 'textarea'));?>
	<?=$this->form->submit('Submit maintance'); ?>
<?=$this->form->end(); ?>