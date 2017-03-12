<?php
//The header grabs your basic head of your HTML Page.
require 'partials/header.php';
?>

<div>

	<h1>Contact</h1>

</div>

<select name="contact">

	<?php foreach ($contactOptions as $key => $reason): ?>
		<option value="<?=$reason['value'];?>"><?=$reason['name'];?></option>
	<?php endforeach; ?>
	<
</select>

<?php
//Footer grabs the closing of HTML page.
require 'partials/footer.php';
?>