<?php
use yii\helpers\Url; 
?>

<div class="pull-right">
	<a href="<?= Url::to(['users/update']) ?>" class="btn btn-success">Добавить</a> 
</div>

<table class="table">
	<thead>
		<th>#</th>
		<th>Login</th>
		<th>Name</th>
		<th>Email</th>
	</thead>
	<tbody>
		<?php foreach ($rows as $row): ?>
		<tr>
			<td><?=$row['id'] ?></td>
			<td>
			<a href="<?=Url::to(['users/update', 'id'=> $row['id']]); ?>"><?=$row['login'] ?></a>
					
			</td>
			<td><?=$row['name'] ?></td>
			<td><?=$row['email'] ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
