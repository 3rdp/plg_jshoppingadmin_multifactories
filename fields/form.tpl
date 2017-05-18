<div id="multifactories" class="tab-pane">
	<table class="admintable">
    <?php foreach ($factories as $factory) { ?>
		<tr data-id="<?=$factory->id?>" data-alias="<?=$factory->alias?>" >
			<td class="key"><?=$factory->name?></td>
			<td>
		    <input 
                class="inputbox wide" 
                type="text" 
                value="<?=$factory->price?>"
                name="multifactories[<?=$factory->id?>]"
                placeholder="<?=$factory->alias?>">
		  </td>
		</tr>
		<?php }	?>
	</table>
</div>
