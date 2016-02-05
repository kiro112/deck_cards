<?php echo Asset::css('bootstrap.css'); ?>
<style type="text/css">
	.box {
		width: 100%;
		height: 200px;
		border: 1px solid black;
		padding: 0 10px;
	}

	.card {
		display: block;
	}
</style>

<div class="container card-attr">
	<div class="row">
		<div class="col-md-3 card-name">
			<h3>Deck No. <?php echo $deck_id ?></h3>

			<?php
				foreach ($cards as $key => $value) {
					echo 'Card '.$value['order'].': <span class="card1">';
					echo $value['name'] ? $value['name'] : '---------';
					echo '</span>';
					echo Html::anchor('decks/create/'.$deck_id.'/'.$value['id'].'/'.$value['order'].'/'. $value['card_id'], 'Change');
					echo '<br/>'; 
				}
			?>
			
		
		</div>			
		<div class="col-md-3">
			<h3>STRENGTH</h3>
			<div class="box strength">
				<?php
					$total_str = 0;
					foreach ($cards as $key => $value) {
						$total_str += (int)$value['strength'];
					}
					echo '<h3>'.$total_str.'</h3>';
				?>
			</div>
		</div>			
		<div class="col-md-3">
			<h3>DEFENSE</h3>
			<div class="box defence">
				<?php
					$total_def = 0;
					foreach ($cards as $key => $value) {
						$total_def += (int)$value['defence'];
					}
					echo '<h3>'.$total_def.'</h3>';
				?>
			</div>
		</div>			
		<div class="col-md-3">
			<h3>SKILLS</h3>
			<div class="box skills">
				<?php
					foreach ($cards as $key => $value) {
						echo '<span>';
						echo $value['skill'] ? '+ '.$value['skill'] : '';
						echo '</span><br/>'; 
					}
				?>
			</div>
		</div>			
	</div>
</div>









<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<label>Choose Deck: </label>
			<select id="deck">
				<?php
				foreach ($decks as $key => $value) {
					echo '<option value="'.$value['id'].'">' .$value['id']. '</option>';
				}
				?>
			</select>
			<br>
			<button onclick="redirectView()" type="button" class="btn btn-primary btn-md">Submit</button>
		</div>
	</div>
</div>



<script type="text/javascript">
	function redirectView () {
		var deck_id = document.getElementById('deck').value;
		window.location.href = '/decks/index/'+deck_id;
	}
</script>
