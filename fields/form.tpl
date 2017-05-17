<div id="hello" class="tab-pane">
	<table>
    <?php foreach ($factories as $factory) { ?>
		<tr data-id="<?=$factory->id?>" data-alias="<?=$factory->alias?>" >
			<td>
		    <input class="inputbox wide" type="text" value="<?=$factory->price?>" placeholder="<?=$factory->alias?>">
		  </td>
		</tr>
		<?php }	?>
	</table>
</div>
