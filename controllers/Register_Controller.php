<?php

/**
* 
*/
class Register_Controller
{
	protected $view;
    protected $model;

	public function __construct()
	{
		//khoi tao doi tuong view thuoc class Register_View
        require_once('public/views/Register_View.php');
		$this->view = new Register_View();
        require_once ('models/Register_Model.php');
        require_once('public/MailService.php');
        $this->model = new Register_Model();


	}

	// public function register() {
	// 	$this->view->showRegister(null);
	// }

	public function register() {
        session_start();
		$error = array();//error la mang dung de kiem tra xem input co bi lỗi hay không
		$data = array(); // data la mang luu gia tri nhap tu form dang nhap
		if (isset($_POST['btnRegister'])) {
		    $data['modelType'] = isset($_POST['modelType']) ? $_POST['modelType'] : '';
    		$data['date'] = isset($_POST['date']) ? $_POST['date'] : '';
      		$data['time'] = isset($_POST['time']) ? $_POST['time'] : '';
    		$data['name'] = isset($_POST['name']) ? $_POST['name'] : '';
    		$data['phoneNumber'] = isset($_POST['phoneNumber']) ? $_POST['phoneNumber'] : '';
       		$data['mail'] = isset($_POST['mail']) ? $_POST['mail'] : '';
      		$data['note'] = isset($_POST['note']) ? $_POST['note'] : '';

            if (empty($data['modelType'])) {
    			$error['modelType'] = ERROR_MODEL_TYPE;
    		}
 
    		if (empty($data['date']) ) {
       			$error['date'] = ERROR_DATE;
    		}
 			
    		if((empty($data['time'])) || ($data['time'] == "--:--")){
        		$error['time'] = ERROR_TIME;
    		}

    		if (empty($data['name'])) {
    			$error['name'] = ERROR_NAME;
    		}
    		if (empty($data['phoneNumber']) || (!preg_match("/^[0-9]{3}(\s)?[0-9]{4}(\s)?[0-9]{4}$/", $data['phoneNumber']))) {  // Validate phoneNumber
    			$error['phoneNumber'] = ERROR_PHONENUMBER;
    		}
    		if (empty($data['mail']) ||  (!filter_var($data['mail'], FILTER_VALIDATE_EMAIL)) ) { //validate mail
    			$error['mail'] = ERROR_MAIL;
    		}
 
    		if (!$error){
                $this->view->showConfirm($data);
                
    		}
    		else{

    			$this->view->showRegister($error,$data);

    		}

		}else {
            $this->view->showRegister(null,null);
        }
	}
	public function success(){
            $error = null;
            $data['modelType'] = $_POST['modelType'];
            $data['date'] = $_POST['date'];
            $data['time'] = $_POST['time'];
            $data['name'] = $_POST['name'];
            $data['phoneNumber'] = $_POST['phoneNumber'];
            $data['mail'] = $_POST['mail'];
            $data['note'] = $_POST['note'];

		    if (isset($_POST['confirm-register'])) {
                $result =  $this->model->insertModelHouse($data);
                if ($result) {
                        $statusSendMail = sendMail($data['mail'],$data);
                        if($statusSendMail)
                            $this->view->showSuccess();
                        else
                            echo ("alert('Send mail failed')");
                }else{
                    echo("FAILED");
                }
               
            }
            if ((isset($_POST['back-register']))) {
                $this->view->showRegister($error,$data);
            }
            if (isset ($_POST['back-homepage'])) {
                $this->view->showregister(null);
            }
	}
   
 

}



?>