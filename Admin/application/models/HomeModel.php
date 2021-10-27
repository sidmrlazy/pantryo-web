<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeModel extends MY_Model
{

	public $_table_name = '';

	function __construct()
	{
		parent::__construct();
	}
	public function gettodayorder()
	{
		$query = $this->db->select('cart_id,orderId,productUnit,customerDeliveryToName,productQty,shopName,productPrice,billingStatus')
			->from('pantryo_cart_product')
			->group_by('orderId')
			->get();
		$data = $query->result();
		foreach ($data as $row) {
			$getcount = $this->db->select_sum('productPrice')
				->select('orderId,cart_id,customerDeliveryToName,shopName,productQty,productUnit,billingStatus')
				->from('pantryo_cart_product')
				->where('orderId', $row->orderId)
				->get();
			$alldetails[] = $getcount->result();
			//    print_r($alldetails);exit;
		}
		return $alldetails;
		// print_r($alldetails);

	}
	public function getallorderdetails($orderId)
	{
		$query = $this->db->select('*')
			->from('pantryo_cart_product')
			->where('orderId', $orderId)
			->get();
		return $query->result();
	}
	public function getallunit($orderId)
	{
		$query = $this->db->select('orderId,productQty,productUnit')
			->from('pantryo_cart_product')
			->where('orderId', $orderId)
			->get();
		return $query->result();
	}
	public function getallitem($orderId)
	{
		$query = $this->db->select('orderId,numberOfProduct')
			->from('pantryo_cart_product')
			->where('orderId', $orderId)
			->get();
		return $query->result();
	}
	public function editinventory($id)
	{
		$query = $this->db->select('*')
			->from('pantryo_inventory')
			->join('partner_category', 'partner_category.partner_category_id=pantryo_inventory.pantryo_inventory_id')
			->join('pantryo_main_category', 'pantryo_main_category.pantryo_main_category_id=pantryo_inventory.pantryo_main_category_id')
			->where('pantryo_inventory_id', $id)
			->get();
		return $query->result();
	}

	public function view_inventory(){
        $query = $this->db->query("SELECT sgh.inventory.id,
                                    sgh.inventory.item_name,
                                    sgh.inventory.price,
                                    sgh.inventory.qty,
                                    sgh.inventory.serial_number,
                                    sgh.inventory.product_key,
                                    sgh.employee.id,
                                    sgh.employee.employee_name
                                  FROM sgh.inventory,
                                  sgh.employee WHERE sgh.inventory.employee_id=sgh.employee.id");
        $item_data = $query->result_array();
        return $item_data;
    }

	public function earning_count(){
		$this->db->select_sum('payment_amount');
		$this->db->from('pantryo_transaction');
		$query=$this->db->get();
		return $query->result();
	}
}
