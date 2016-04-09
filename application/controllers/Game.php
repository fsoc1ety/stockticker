<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Game extends Application {

	function __construct() {
		parent::__construct();
		$this->load->model('stocks');
		$this->load->model('players');
	}

	public function index()
	{
		if ($this->session->userdata('user') !== null) {
			$user = $this->session->userdata('user');

			$this->data['pagebody'] = 'gameplay';
			$this->data['stocks'] = $this->stocks->all();
			$this->data['my_stocks'] = $this->stocks->getPlayerStocks($user->Username);
			$this->data['current_player_username'] = $user->Username;
			$this->data['current_player_cash'] = $user->Cash;
			$this->data['curent_player_avatar'] = $user->Avatar;
		}
		else {
			$this->data['pagebody'] = 'welcome';
		}

		$this->render();
	}
}
