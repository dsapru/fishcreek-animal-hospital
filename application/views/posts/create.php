<div id="rightcolumn">
<h2>Contact Fish Creek</h2>
<p>Required fields are marked with an asterisk (*).</p>
<?php echo validation_errors(); ?>
<?php echo form_open('posts/create'); ?>
<label for="myName">*Name:</label>
<input type="text" name="myName" id="myName" required="required"><br>
<label for="myEmail">*E-mail:</label>
<input type="email" name="myEmail" id="myEmail" required="required"><br>
<label for="myComments">*Comments:</label>
<textarea name="myComments" id="myComments" required="required"/> </textarea>
<input id="mySubmit" type="submit" value="Send Now">
</form>
</div>
