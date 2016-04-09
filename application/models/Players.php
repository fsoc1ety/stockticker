<?php

class Players extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function headers()
    {
        return $this->db->list_fields('players');
    }

    public function all()
    {
        return $this->db->get('players')->result_array();
    }
   

//    public function allPlayersIncludeEquity()
//    {
//        return $this->db->query('SELECT players.ID, players.Player, players.Cash, SUM(temp.Total) AS \'Equity\' '
//            . 'FROM players LEFT JOIN ('
//            . 'SELECT stocks.Name, stockdistribution.PlayerID, '
//            . 'SUM(stocks.Value*stockdistribution.Quantity) as \'Total\' '
//            . 'FROM stocks INNER JOIN stockdistribution '
//            . 'ON stocks.ID=stockdistribution.StockID '
//            . 'GROUP BY stockdistribution.PlayerID, stocks.Name) AS  temp '
//            . 'ON players.ID=temp.PlayerID '
//            . 'GROUP BY players.ID')->result_array();
//    }

    public function get($id)
    {
        $this->db->select('*');
        $this->db->where('username=', $id);
        return $this->db->get('players')->row();
    }

//    public function getPlayerEquity($id)
//    {
//        return $this->db->query('SELECT SUM(temp.Total) AS \'Equity\' '
//            . 'FROM players LEFT JOIN ('
//            . 'SELECT stocks.Name, stockdistribution.PlayerID, '
//            . 'SUM(stocks.Value*stockdistribution.Quantity) as \'Total\' '
//            . 'FROM stocks INNER JOIN stockdistribution '
//            . 'ON stocks.ID=stockdistribution.StockID '
//            . 'GROUP BY stockdistribution.PlayerID, stocks.Name) AS  temp '
//            . 'ON players.ID=temp.PlayerID '
//            . 'WHERE players.ID=\'' . $id . '\' '
//            . 'GROUP BY players.ID')->result_array();
//    }
}
