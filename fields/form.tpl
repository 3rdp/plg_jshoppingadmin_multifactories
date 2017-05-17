<div id="hello" class="tab-pane">
	<table>
    <?php foreach ($factories as $factory) { ?>
		<tr data-alias="<?=$factory->alias?>">
			<td>
		    <input class="inputbox wide" type="text" placeholder="<?=$factory->alias?>">
		  </td>
		</tr>
		<?php }	?>
	</table>
</div>