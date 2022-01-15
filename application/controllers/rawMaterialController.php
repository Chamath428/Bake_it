<?php

class rawMaterialController extends bakeItFramework
{

	function __construct()
	{
		$this->availableMaterialsModel = $this->model("availableMaterialsModel");
	}

	public function index()
	{
		switch ($_SESSION['role_number']) {
			case '2':
				$data = $this->availableMaterialsModel->getMaterials();
				$this->view("owner/rawMaterials", $data);
				break;
			case '3':
				$data = $this->availableMaterialsModel->getMaterials();
				$this->view("bakery_manager/Available_Materials", $data);
				break;
			default:
		}
	}


	public function reindex($message)
	{
		$data = $this->availableMaterialsModel->getMaterials();
		$this->viewWithMessage("bakery_manager/Available_Materials", $data, $message);
	}


	public function getAddStock()
	{
		$data = $this->availableMaterialsModel->getMaterials();
		$this->view("bakery_manager/add_stock", $data);
	}

	public function regetAddStock($message)
	{
		$data = $this->availableMaterialsModel->getMaterials();
		$this->viewWithMessage("bakery_manager/add_stock", $data, $message);
	}



	public function getSummary()
	{
		$data = array();
		$this->view("bakery_manager/summary", $data);
	}

	public function retreiveMaterials()
	{
		$data['error'] = "";
		$finalCount = $_POST['finalCount'];
		$materialData = array();
		for ($i = 1; $i <= $finalCount; $i++) {
			$materialData[$_POST['itemId' . $i]] = $_POST['quntity' . $i];
		}
		foreach ($materialData as $itemId => $quantity) {
			if ($this->availableMaterialsModel->compareItems($itemId, $quantity)) {
				$itemName = $this->availableMaterialsModel->getItemName($itemId);
				$data['error'] = "Not enough " . $itemName . " to fulfill the request";
				break;
			} else if ($quantity <= 0) {
				$data['error'] = "Please enter a valid amount";
				break;
			}
		}

		if ($data['error'] == "") {
			foreach ($materialData as $itemId => $quantity) {
				$this->availableMaterialsModel->updateMaretials($itemId, $quantity, 0);
			}
			$data['confirmation'] = "Stock updated Successfully.";
			$this->reindex($data);
		} else {
			$this->reindex($data);
		}
	}

	public function addRawMaterials()
	{
		$data['error'] = "";
		$finalCount = $_POST['finalCount'];
		$materialData = array();

		for ($i = 1; $i <= $finalCount; $i++) {
			$materialData[$_POST['itemId' . $i]] = $_POST['quntity' . $i];
		}

		foreach ($materialData as $itemId => $quantity) {
			if ($quantity <= 0) {
				$data['error'] = "Please enter a valid amount";
				break;
			}
		}

		if ($data['error'] == "") {
			foreach ($materialData as $itemId => $quantity) {
				$this->availableMaterialsModel->updateMaretials($itemId, $quantity, 1);
			}
			$data['confirmation'] = "Stock updated Successfully.";
			$this->regetAddStock($data);
		} else {
			$this->regetAddStock($data);
		}
	}

	public function deleteRawMaterials()
	{
		if (isset($_POST['chk_id'])) {
	$this->availableMaterialsModel->deleteRaw();	
	$this->index();					


		}

	}
}
