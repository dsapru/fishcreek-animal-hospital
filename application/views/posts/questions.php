<table>
<tr><th>Questions</th><th>Answers</th></tr>	
<?php foreach($questions as $post) : ?>
<tr><td style='width: 200px;'><?php echo $post['questions']; ?></td><td style='width: 600px;'><?php echo $post['answers']; ?></td></tr>
 <?php endforeach; ?>
</table>