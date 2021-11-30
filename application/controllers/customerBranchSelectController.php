 <?php 

/**
 * 
 */
class customerBranchSelectController extends bakeItFramework
{
	
	function __construct()
	{
		$this->customerBranchSelectModel=$this->model('customerBranchSelectModel');
	}

	public function index($category_id){
		$data[1]=$category_id;
		$data[2]=$this->customerBranchSelectModel->getBranches();
		$this->view("customer/branchSelect",$data);
	}

	public function setBranch(){
				$branch_id=$_POST['branch_id'];
				$category_id=$_POST['category_id'];
        $_SESSION['branch_Id']=$branch_id;
        $_SESSION['branch_name']=$this->customerBranchSelectModel->getBranch($branch_id);
        header("Location:".BASEURL."/customermenuController/getCategoryItems/".$category_id);

    }
}

  ?>