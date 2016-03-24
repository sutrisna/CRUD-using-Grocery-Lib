<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Data Mahasiswa</title>
	<?php foreach($css_files as $file):?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>">
	<?php endforeach; ?>
	<?php foreach($js_files as $file): ?>
 
    <script src="<?php echo $file; ?>"></script>
	<?php endforeach; ?>
	</style>
</head>	
	<body>
	
		<div>
			<?php echo $output; ?>
		</div>
		
	</body>
</html>
	
