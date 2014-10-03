<link rel="stylesheet" type="text/css" href="styles.css">
<?php
$mainArray = array(
	array(
		'Name'    => 'Trixie',
		'Color'   => 'Green',
		'Element' => 'Earth',
		'Likes'   => 'Flowers'
	),
	array(
		'Name'    => 'Tinkerbell',
		'Element' => 'Air',
		'Likes'   => 'Singning',
		'Color'   => 'Blue'
	),
	array(
		'Element' => 'Water',
		'Likes'   => 'Dancing',
		'Name'    => 'Blum',
		'Color'   => 'Pink'
	),
);

$colors = array('#00DDFF', '#00FF00', '#FF0000', '#00FF33', '#11CCEE');

$headerTexts = array_keys($mainArray[0]);
?>

<h1 class="header">Display Table Data</h1>

<table class="table">
	<tr>
		<?php for ($i = 0; $i < count($headerTexts); $i++): ?>
			<th style="background-color: <?php echo $colors[$i] ?>" width="<?php echo 100/(count($headerTexts)); ?>%">
				<?php echo $headerTexts[$i]; ?>
			</th>
		<?php endfor; ?>
	</tr>
	<?php foreach ($mainArray as $k1 => $v1): ?>
		<tr>
			<?php for ($i = 0; $i < count($headerTexts); $i++): ?>
				<td style="background-color: <?php echo $colors[$i]; ?>">
					<?php echo $v1[$headerTexts[$i]]; ?>
				</td>
			<?php endfor; ?>
		</tr>
	<?php endforeach;; ?>
</table>