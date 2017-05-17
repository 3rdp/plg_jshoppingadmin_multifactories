<div id="hello" class="tab-pane">
	<table class="admintable">
	  <tbody>
	    <?php foreach ($factories as $factory) { ?>
			<tr class="dfsdf">
				<td>
			    <input class="inputbox wide" type="text" placeholder="<?php echo $factory->alias; ?>">
			   </td>
			</tr>
		<?php }	?>
	  </tbody>
	</table>
</div>