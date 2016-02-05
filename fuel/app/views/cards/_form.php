<?php echo Form::open(array("class"=>"form-horizontal")); ?>


	<fieldset>
		<div class="form-group">

				<h3>Deck No. <?php echo($deck_id); ?></h3>



		</div>

		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
	
<?php echo Form::close(); ?>