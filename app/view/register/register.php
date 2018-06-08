<form method="post" action='/<?php echo DOMAIN; ?>/register/reg'>
	<table width="800px">
		<tr width='100px'>
			<td>ชื่อ</td>
			<td><input type="text" name="reg[name]" id="reg[name]"></td>
		</tr>
		<tr width='100px'>
			<td>นามสกลุ</td>
			<td><input type="text" name="reg[lname]" id="reg[name]lname"></td>
		</tr>
		<tr width='100px'>
			<td>ที่อยู่</td>
			<td><input type="text" name="reg[address]" id="reg[address]"></td>
		</tr>
		<tr width='100px'>
			<td>user</td>
			<td><input type="text" name="reg[user]" id="reg[user]"></td>
		</tr>
		<tr width='100px'>
			<td>pass</td>
			<td><input type="text" name="reg[pass]" id="reg[pass]"></td>
		</tr>
		<tr>
			<td>
				<button type="submit">REGISTER</button>
			</td>
		</tr>
	</table>
</form>