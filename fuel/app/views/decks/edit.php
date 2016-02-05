<h2>Editing Deck</h2>
<br>

<?php echo render('decks/_form'); ?>
<p>
	<?php echo Html::anchor('decks/view/'.$deck->id, 'View'); ?> |
	<?php echo Html::anchor('decks', 'Back'); ?></p>
