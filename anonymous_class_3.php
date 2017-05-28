<?php
	$cheat_deck = new class extends CardDeck{
		public function top_card(){
			return $this->cards[0];
		}
	}

	$cheat_deck->top_card();
	
?>


