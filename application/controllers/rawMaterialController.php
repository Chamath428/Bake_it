<?php

class rawMaterialController extends bakeItFramework
{

	function __construct()
	{
		$this->availableMaterialsModel = $this->model("availableMaterialsModel");
		$this->bakeryManagerSummaryModel = $this->model("bakeryManagerSummaryModel");
	}

	public function index($category_id = 1)
	{

		switch ($_SESSION['role_number']) {
			case '2':
				// $material= $this->availableMaterialsModel->getMaterials();
				$categories = $this->availableMaterialsModel->getCategories();
				$categoryItems = $this->availableMaterialsModel->getItems($category_id);
				$data[0] = $categories;
				$data[1] = $categoryItems;
				$data[2] = $category_id;
				$this->view("owner/rawMaterials", $data);

				break;
			case '3':
				$categories = $this->availableMaterialsModel->getCategories();
				$categoryItems = $this->availableMaterialsModel->getItems($category_id);
				$data[0] = $categories;
				$data[1] = $categoryItems;
				$data[2] = $category_id;
				$this->view("bakery_manager/Available_Materials", $data);
				break;
			default:
		}
	}


	public function reindex($message, $categories)
	{


		$category = $this->availableMaterialsModel->getCategories();
		$categoryItems = $this->availableMaterialsModel->getItems($categories);
		$data[0] = $category;
		$data[1] = $categoryItems;
		$data[2] = $categories;
		// $data = $this->availableMaterialsModel->getMaterials();
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

		$categories = $this->bakeryManagerSummaryModel->getCategories();
		$data[0] = $categories;
		$selectCategoryUseDate = $this->bakeryManagerSummaryModel->getCategoriesSelectedDate("2022-1");
		$data[1] = $selectCategoryUseDate;

		$this->view("bakery_manager/summary", $data);
	}

	public function selectedDateGetSummary()
	{

		$year = $_POST['year'];
		$month = $_POST['month'];
	
		$date=$year."-".$month;

		$data = array();
		$categories = $this->bakeryManagerSummaryModel->getCategories();
		$data[0] = $categories;

		$selectCategoryUseDate = $this->bakeryManagerSummaryModel->getCategoriesSelectedDate($date);
		$data[1] = $selectCategoryUseDate;


		$this->view("bakery_manager/summary", $data);
	}


	public function retreiveMaterials()
	{


		$data['error'] = "";
		$finalCount = $_POST['finalCount'];
		$categories = $_POST['category'];
		// echo $categories;
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

				$this->availableMaterialsModel->insertRetrieveMaretials($itemId, $quantity, date("Y-m-d "), 1);

				$this->availableMaterialsModel->updateMaretials($itemId, $quantity, 0);
			}
			$data['confirmation'] = "Stock updated Successfully.";

			$this->reindex($data, $categories);
			// $this->index($categories);
		} else {
			$this->reindex($data, $categories);


			// $this->index($categories);
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

				$this->availableMaterialsModel->insertStockMaretials($itemId, $quantity, 1, date("Y-m-d "));
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

	public function selectCategory($category_id = 1)
	{
		$categories = $this->availableMaterialsModel->getCategories();
		$catrgoryItems = $this->availableMaterialsModel->getCategoryItems($category_id);
		$data[1] = $categories;
		$data[2] = $catrgoryItems;
		$this->view("owner/rawMaterials", $data);
	}
	public function getItemsRawMaterials()
	{
		$category_id = $_POST['categoryId'];
		$this->redirect("rawMaterialController/index/" . $category_id);
	}

	public function insertRawMaterials()
	{
		$insertData = array();
		// $item_id = $_POST['itemId'];
		$item_name = $_POST['itemName'];
		$item_quantity = $_POST['quantity'];
		$measure_unit = $_POST['measure_unit'];
		$categoryId = $_POST['categoryId'];


		// $insertData['rawitem_id'] =$item_id;
		$insertData['rawitem_name'] = $item_name;
		$insertData['stock_amount'] = $item_quantity;
		$insertData['raw_category_id'] = $categoryId;
		$insertData['measure_unit'] = $measure_unit;


		$this->availableMaterialsModel->insertRawMaterials($insertData);
		$this->index();
	}

	public function deleteRawMaterialsInventory($ids)
	{

		//    echo $ids;
		// $check_id = array();
		// $urlIds= $_GET['deleteIds'];

		$check_id = explode('.', $ids);
		// echo $check_id[1]; 
		$this->availableMaterialsModel->deleteMenuRawMaterial($check_id);
		$this->index("owner/rawMaterials");
	}
}
