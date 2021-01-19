<?php
class ControllerCommonFooter extends Controller {
	public function index() {
 
 /*======Show Themeconfig=======*/ 
 $data['soconfig'] = $this->soconfig; 
 $this->load->language('extension/soconfig/compare'); 
 $data['objlang'] = $this->language; 
 $data['lang_id'] = $this->config->get('config_language_id'); 
 $data['theme_directory'] = $this->config->get('theme_default_directory'); 
 $data['account_fb'] = isset($this->request->get['account_fb']) ? $this->request->get['account_fb'] : '' ; 
 $data['compare'] = $this->url->link('product/compare', '', true); 
 
 // add position 
 if( $this->soconfig->get_settings('typefooter') == 1) $data['footer_block1'] = $this->load->controller('extension/soconfig/footer_block1'); 
 else if( $this->soconfig->get_settings('typefooter') == 2) {
 	$data['footer_block2'] = $this->load->controller('extension/soconfig/footer_block2'); 
 	$data['footer_block3'] = $this->load->controller('extension/soconfig/footer_block3');
} else if( $this->soconfig->get_settings('typefooter') == 3) 
	$data['footer_block4'] = $this->load->controller('extension/soconfig/footer_block4');
 
		$this->load->language('common/footer');

		$this->load->model('catalog/information');

		$data['informations'] = array();

		foreach ($this->model_catalog_information->getInformations() as $result) {
			if ($result['bottom']) {
				$data['informations'][] = array(
					'title' => $result['title'],
					'href'  => $this->url->link('information/information', 'information_id=' . $result['information_id'])
				);
			}
		}

		$data['contact'] = $this->url->link('information/contact');
		$data['return'] = $this->url->link('account/return/add', '', true);
		$data['sitemap'] = $this->url->link('information/sitemap');
		$data['tracking'] = $this->url->link('information/tracking');
		$data['manufacturer'] = $this->url->link('product/manufacturer');
		$data['voucher'] = $this->url->link('account/voucher', '', true);
		$data['affiliate'] = $this->url->link('affiliate/login', '', true);
		$data['special'] = $this->url->link('product/special');
		$data['account'] = $this->url->link('account/account', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['newsletter'] = $this->url->link('account/newsletter', '', true);

		$data['powered'] = sprintf($this->language->get('text_powered'), $this->config->get('config_name'), date('Y', time()));

		// Whos Online
		if ($this->config->get('config_customer_online')) {
			$this->load->model('tool/online');

			if (isset($this->request->server['REMOTE_ADDR'])) {
				$ip = $this->request->server['REMOTE_ADDR'];
			} else {
				$ip = '';
			}

			if (isset($this->request->server['HTTP_HOST']) && isset($this->request->server['REQUEST_URI'])) {
				$url = ($this->request->server['HTTPS'] ? 'https://' : 'http://') . $this->request->server['HTTP_HOST'] . $this->request->server['REQUEST_URI'];
			} else {
				$url = '';
			}

			if (isset($this->request->server['HTTP_REFERER'])) {
				$referer = $this->request->server['HTTP_REFERER'];
			} else {
				$referer = '';
			}

			$this->model_tool_online->addOnline($ip, $this->customer->getId(), $url, $referer);
		}


                $data['so_countdown'] = $this->load->controller('extension/module/so_countdown');
            
		$data['scripts'] = $this->document->getScripts('footer');
		

				// Menu Mobile
				$this->load->model('catalog/category');
				$this->load->model('catalog/product');
				$this->load->language('extension/soconfig/somobile');
				$data['objlang'] = $this->language;
				$data['categories'] = array();
				$data['mobile'] = $this->soconfig;
				$data['lang_id'] = $this->config->get('config_language_id');
				$data['text_account'] = $this->language->get('text_account');
				$data['text_register'] = $this->language->get('text_register');
				$data['text_login'] = $this->language->get('text_login');
				
				$categories = $this->model_catalog_category->getCategories(0);
				$data['content_top'] = $this->load->controller('common/content_top');
				$data['content_bottom'] = $this->load->controller('common/content_bottom');
				$data['content_menu1'] = $this->load->controller('extension/soconfig/content_menu1'); 
                $data['content_menu2'] = $this->load->controller('extension/soconfig/content_menu2'); 
				foreach ($categories as $category) {
					if ($category['top']) {
						// Level 2
						$children_data = array();

						$children = $this->model_catalog_category->getCategories($category['category_id']);

						foreach ($children as $child) {
							$filter_data = array(
								'filter_category_id'  => $child['category_id'],
								'filter_sub_category' => true
							);

							$children_data[] = array(
								'name'  => $child['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
								'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'])
							);
						}

						// Level 1
						$data['categories'][] = array(
							'name'     => $category['name'],
							'children' => $children_data,
							'column'   => $category['column'] ? $category['column'] : 1,
							'href'     => $this->url->link('product/category', 'path=' . $category['category_id'])
						);
					}
				}

				$data['language'] = $this->load->controller('common/language');
				$data['currency'] = $this->load->controller('common/currency');
				$data['search'] = $this->load->controller('common/search');
				$data['cart'] = $this->load->controller('common/cart');
				$data['wishlist'] = $this->url->link('account/wishlist', '', true);
				$data['compare'] = $this->url->link('product/compare', '', 'SSL');
				$data['text_compare']  = sprintf($this->language->get('text_compare'),(isset($this->session->data['compare']) ? count($this->session->data['compare']) : 0));
				$data['logged'] = $this->customer->isLogged();
				$data['account'] = $this->url->link('account/account', '', true);
				$data['register'] = $this->url->link('account/register', '', true);
				$data['login'] = $this->url->link('account/login', '', true);
				//Decodes HTML Entities
         		$data['customfooter_text'] = html_entity_decode($data['soconfig']->get_settings('customfooter_text'), ENT_QUOTES, 'UTF-8');
			
			
		return $this->load->view('common/footer', $data);
	}
}
