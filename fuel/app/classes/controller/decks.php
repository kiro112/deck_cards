<?php

class Controller_Decks extends Controller_Template
{

	public function action_index($id = 1)
	{

		if (!is_numeric($id) || (int)$id < 0 || (int)$id > 10) {
			$id = 1;
		}

		$data['deck_id'] = (int)$id;
		$data['decks'] = Model_Deck::find_all();
		$data['cards'] = Model_Mycard::list_card($id);

		$this->template->title = "~ My Deck Cards ~";
		$this->template->content = View::forge('decks/index', $data);
	}



	public function action_card($deck_id = '', $card_id = '')
	{
		$data['decks'] = Model_Deck::find_all();
		$data['deck_id'] = 'Action Card';

		$this->template->title = "~ My Deck Cards ~";
		$this->template->content = View::forge('decks/index', $data);
	}

	/*
		Change Deck Card
	*/
	public function action_create($deck_id = null, $card_deck_id = null, $order = null, $card_id = null) {
		

		if (is_null($deck_id) || !is_numeric($deck_id) || $deck_id <= 0 || $deck_id > 10) {
			Session::set_flash('error', 'Invalid deck id.');
			Response::redirect('decks');	
		}

		if (is_null($card_deck_id) || !is_numeric($card_deck_id) || $deck_id <= 0 || $deck_id > 30) {
			Session::set_flash('error', 'Invalid card_deck id.');
			Response::redirect('decks');	
		}

		if (is_null($card_id) || !is_numeric($card_id) || $deck_id < 0 || $deck_id > 10) {
			Session::set_flash('error', 'Invalid card id.');
			Response::redirect('decks');	
		}

		if (is_null($order) || !is_numeric($order) || $order < 1 || $order > 3) {
			Session::set_flash('error', 'Can only have 3 cards in a deck.');
			Response::redirect('decks');
		}


		if (Input::method() == 'POST') {
			$deck_card = Model_Mycard::find_one_by_id($card_deck_id);
			
			$val = Model_Mycard::validate('create');

			if ($val->run()) {
				$deck_card->name = Input::post('name');
				$deck_card->card_id = Input::post('card_id');
				$deck_card->strength = Input::post('strength');
				$deck_card->defence = Input::post('defence');
				$deck_card->skill = Input::post('skill');

				$this->template->set_global('deck_card', $deck_card, false);
				if ($deck_card->save()) {
					Response::redirect('decks/index/'.$deck_id);
				} else {
					Session::set_flash('error', 'Nothing updated.');
				}
				
			} else {
				Session::set_flash('error', $val->error());
			}
		}



		$data['order'] = $order;
		$data['deck_id'] = $deck_id;
		$data['card_id'] = $card_id;
		$data['card_deck_id'] = $card_deck_id;

		$data['card_list'] = Model_Card::find_all();
		$data['card_details'] = Model_Card::find_by_pk($card_id);

		$this->template->title = "Change Card";
		$this->template->content = View::forge('cards/create', $data);
	}
	
}
