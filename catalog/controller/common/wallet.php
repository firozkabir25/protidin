<?php
class ControllerCommonWallet extends Controller {
    public function getWallet(){
        $this->load->language('common/cart');

		// Totals
		$this->load->model('setting/extension');
        $this->load->model('account/wallet');
        
        if ($this->customer->isLogged()){
			$data['user'] = $this->customer->getFirstName()." ". $this->customer->getLastName();

			if (isset($this->session->data['customer_id']))	{
						//---------Wallet Percent-------------//
			if (isset($this->session->data['customer_id']))	{
				$max_amount = $this->model_account_wallet->getRewardRate();
				$max_value = $max_amount['max_amount'];
				$percentage_value = $max_amount['percentage_value'];

				$enable_rate = $this->model_account_wallet->getEnableRate(['is_percentage, is_fixed']);
					$is_percentage = $enable_rate['is_percentage'];
					$is_fixed = $enable_rate['is_fixed'];
					$parchage_total = $total['value'];		
					
						if($is_percentage==1){
							if($max_value<=(int)$parchage_total){
								$total_value = $parchage_total*$percentage_value/100;
							}	
						}
						if($is_fixed ==1){
							if($max_value<=(int)$parchage_total){
								$total_value = $parchage_total*$percentage_value/100;
							}	
						}
				}
			}
        }
        $data['cart'] = $this->url->link('checkout/cart');
		$data['checkout'] = $this->url->link('checkout/checkout', '', true);

		return $this->load->view('common/wallet', $data);
    }
    public function info() {
		$this->response->setOutput($this->getWallet());
	}

}