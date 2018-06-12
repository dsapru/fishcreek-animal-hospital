<table>
<tr><th>Services</th><th>Description</th></tr>	
<?php foreach($services as $post) : ?>
<tr><td style='width: 200px;'><?php echo $post['servicename']; ?></td><td style='width: 600px;'><?php echo $post['description']; ?></td></tr>
 <?php endforeach; ?>
</table>

