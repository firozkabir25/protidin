<?php
class ModelExtensionTotalAddAmount extends Model {
	public function getTotal($total) {
		$this->load->language('extension/total/add_amount');

		$add_amount= $this->cart->getWallets();

		// if (!empty($this->session->data['vouchers'])) {
		// 	foreach ($this->session->data['vouchers'] as $voucher) {
		// 		$sub_total += $voucher['amount'];
		// 	}
		// }

		$total['totals'][] = array(
			'code'       => 'add_amount',
			'title'      => $this->language->get('text_add_amount'),
			'value'      => $add_amount,
			'sort_order' => $this->config->get('total_add_amount_sort_order')
		);

		$total['total'] -= $add_amount;
	}
}
