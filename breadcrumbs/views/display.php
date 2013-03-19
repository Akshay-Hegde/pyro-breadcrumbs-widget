{{ if {url:segments segment="1"} != '' }}
	{{ if template:has_breadcrumbs }}
		<a href="/" title="Home">Home</a>
		{{ template:breadcrumbs }}
			<span class="crumb-child">
				<?php if ($separator == 'greater_than'): ?>
					>
				<?php elseif($separator == 'pipe'): ?>
					|
				<?php elseif($separator == 'hyphen'): ?>
					-
				<?php elseif($separator == 'bullet'): ?>
					&bull;
				<?php elseif($separator == 'slash'): ?>
					/
				<?php endif; ?>
			</span>
			{{ if uri }}
				{{ url:anchor segments=uri title=name }}
			{{ else }}
				<span class="current">{{ name }}</span>
			{{ endif }}
		{{ /template:breadcrumbs }}
	{{ endif }}
{{ endif }}