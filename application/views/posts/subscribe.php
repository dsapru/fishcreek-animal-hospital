<h2>Subscribe Fish Creek</h2>
<p>Required fields are marked with a/n asterisk (*).</p>	
<?php echo validation_errors(); ?>
<?php echo form_open('posts/subscribe'); ?>
<label for="ClientName">*Client Full  Name:</label>
<input type="text" name="ClientName" id="ClientName" ><br>
<label for="Address">*Address:</label>
<input type="text" name="Address" id="Address">
<label for="mail">*E-mail:</label>
<input type="email" name="mail" id="mail">
<label for="Phone">*Phone:</label>
<input type="text)" name="Phone" id="Phone">
<label for="Password">*Password:</label>
<input type="Password" name="Password" id="Password">
<label for="tos">*Type of Service:</label>
<select>
	<option>--Service Name--</option>
	<option>Medical Services</option>
	<option>Surgical Services</option>
	<option>Dental Care</option>
	<option>House Calls</option>
	<option>Emergency</option>
</select></br></br></br>
<label for="pet">*Pet:</label>
<select>
	<option>--Pet Name--</option>
	<option>Blossom</option>
	<option>Oliver</option>
	<option>Rowan Oak</option>
	<option>Idgie Ruth</option>
</select>
</br></br></br>
<input id="mySubmit" type="submit" value="Send Now">
</select>
</form>
</div>