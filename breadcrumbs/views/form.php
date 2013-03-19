<ul>
	<li class="even">
		<label>Separator</label>
		<?php echo form_dropdown(
			'separator',
			array(
				'greater_than'	=>	'Greater Than',
				'pipe'			=>	'Pipe',
				'hyphen'		=>	'Hyphen',
				'bullet'		=>	'Bullet',
				'slash'			=>	'Slash'
			),
			$options['separator']); ?>
	</li>
</ul>