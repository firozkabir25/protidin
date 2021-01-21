<?php
class ModelAccountWallet extends Model{
    public function index(){
        $this->load->language('account/wallet');

    }
    public function getRewardPoint($id) {
        $sql = "SELECT reward_point FROM " . DB_PREFIX . "customer_rewards WHERE customer_id = ". (int)$id ."";
		$query = $this->db->query($sql);
        return $query->row;
        
    }
    public function getEnableRate(){
        $query = $this->db->query("SELECT reward_point, is_percentage, is_fixed FROM " . DB_PREFIX . "rewards_setting");
        return $query->row;
        
    }

    public function getRewardRate(){
        $sql = "SELECT * FROM ". DB_PREFIX ."reward_rate_setting ORDER BY id ASC LIMIT 1";
        $query= $this->db->query($sql);
        return $query->row;

    } 
}


// public function updateRewardPoint($customer_id, $reward_point){
//         $query = $this->db->query("UPDATE " .DB_PREFIX . "customer_rewards SET reward_point=".$reward_point." WHERE customer_id = ".$customer_id."");
//         return $query->rows;
//     }

