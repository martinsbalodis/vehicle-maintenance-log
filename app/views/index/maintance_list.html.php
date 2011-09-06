<?=$this->form->create(); ?>
	<?=$this->form->field('search', array('value'=>$search));?>
	<?=$this->form->submit('Search'); ?>
<?=$this->form->end(); ?>




<table>
	<thead>
		<th>Name</th>
		<th>Surname</th>
		<th>mark</th>
		<th>model</th>
		<th>vehicle_reg_number</th>
		<th>maintance_date</th>
		<th>maintance_length</th>
		<th>milage</th>
		<th>maintance_comment</th>
		<th>phone</th>
		<th>price</th>
	</thead>
	<tbody>
		<?php foreach($maintances as $maintance): ?>
		<?php /* @var $maintance Maintance */ ?>
		<tr>
			<td><?=$maintance->name?></td>
			<td><?=$maintance->surname?></td>
			<td><?=$maintance->mark?></td>
			<td><?=$maintance->model?></td>
			<td><?=$maintance->vehicle_reg_number?></td>
			<td><?=$maintance->maintance_date?></td>
			<td><?=$maintance->maintance_length?></td>
			<td><?=$maintance->milage?></td>
			<td><?=$maintance->maintance_comment?></td>
			<td><?=$maintance->phone?></td>
			<td><?=$maintance->price?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>