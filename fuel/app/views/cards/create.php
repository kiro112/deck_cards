<?php echo Form::open(array("class"=>"form-horizontal")); ?>


	<fieldset>
		<div class="form-group">
				<h3>Deck No. <?php echo($deck_id); ?></h3>

				<label>Select Card:</label>
				<select id="card" onchange="changeCard()">
					<option value="0"
							data-name=""
							data-str="0"
							data-def="0"
							data-skill="">--------</option>
					<?php
						foreach ($card_list as $key => $value) {
							echo '<option 
										value="'.$value['id'].'" 
										data-name="'.$value['name'].'"
										data-str="'.$value['strength'].'"
										data-def="'.$value['defence'].'"
										data-skill="'.$value['skill'].'"';

							if ($card_id === $value['id']) {
								echo ' selected="selected" ';
							}

							echo '>' .$value['name']. '</option>';
						}
					?>
				</select>
		</div>

		<input type="hidden" name="order" id="order" class="form-control" value="<?php echo($order); ?>">
		<input type="hidden" name="card_deck_id" id="card_deck_id" class="form-control" value="<?php echo($card_deck_id); ?>">
		<input type="hidden" name="deck_id" id="deck_id" class="form-control" value="<?php echo($deck_id); ?>">
		<input type="hidden" name="card_id" id="card_id" class="form-control" value="<?php echo($card_id); ?>">
		
		<div class="form-group">
			<label>Name: </label>
			<input type="text" name="name" id="name" class="form-control" value="<?php echo($card_details['name']); ?>" readonly>
		</div>

		<div class="form-group">
			<label>Strength: </label>
			<input type="text" name="strength" id="strength" class="form-control" value="<?php echo($card_details['strength']); ?>" readonly>
		</div>

		<div class="form-group">
			<label>Defences: </label>
			<input type="text" name="defence" id="defence" class="form-control" value="<?php echo($card_details['defence']); ?>" readonly>
		</div>

		<div class="form-group">
			<label>Skill: </label>
			<input type="text" name="skill" id="skill" class="form-control" value="<?php echo($card_details['skill']); ?>" readonly>
		</div>



		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
	
<?php echo Form::close(); ?>

<p><?php echo Html::anchor('decks', 'Back'); ?></p>


<script type="text/javascript">
	function changeCard() {
		var select = document.getElementById('card');

		document.getElementById('card_id').value = select.options[select.selectedIndex].value;
		document.getElementById('name').value = select.options[select.selectedIndex].getAttribute('data-name');
		document.getElementById('strength').value = select.options[select.selectedIndex].getAttribute('data-str');
		document.getElementById('defence').value = select.options[select.selectedIndex].getAttribute('data-def');
		document.getElementById('skill').value = select.options[select.selectedIndex].getAttribute('data-skill');

	}
</script>