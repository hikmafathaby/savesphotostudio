<center>
	<?php echo form_open('website/daftarAdmin'); ?>
<br>
<br>
<table align="center">
	<tr>
		<td>Username</td>
		<td> <?php echo form_input('username'); ?> </td>
	</tr>

	<tr>
		<td>Email</td>
		<td> <?php echo form_input('email'); ?> </td>
	</tr>

	<tr>
		<td>Password</td>
		<td><input type="password" name="pas"></td>
	</tr>

	<tr>
		<td> <?php echo form_submit('daftar', 'Daftar'); ?> </td>
	</tr>

</table>
<?php echo form_close(); ?>
</center>
