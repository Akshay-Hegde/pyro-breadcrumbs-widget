<ul>
	<li class="odd">
		<label>Separator</label>
		<?php echo form_dropdown(
			'separator',
			array(
				'greater_than'	=>	'Greater Than',
				'pipe'			=>	'Pipe',
				'hyphen'		=>	'Hyphen',
				'bullet'		=>	'Bullet',
				'slash'			=>	'Slash',
				'custom'		=>	'Custom Image'
			),
			$options['separator']); ?>
	</li>
	<li class="even">
		<label>Custom Image URL</label>
		<?php echo form_input('custom_url', $options['custom_url']);?>
	</li>
</ul>