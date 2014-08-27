<?php 
$errors = array();
if (isset($_POST['data']) && !empty($_POST['data'])) 
{
	$data = $_POST['data'];
	//check email
	if (!isset($data['mail']) || empty($data['mail'])) {
		$errors[] = "Введите корректный E-mail";
	}
	//check login
	if (!isset($data['login']) || empty($data['login'])) {
		$errors[] = "Введите корректный login";
	}
	//check password
	if (!isset($data['password']) || empty($data['password'])) {
		$errors[] = "Введите корректный password";
	}
	//check date
	if(!isset($data['day'], $data['month'], $data['year'])) {
		$errors[] = "Введите корректную дату рождения";
	} else {
		$lastDayOfMonth = date('t', strtotime($data['year'] . '-' . $data['month'] . '-1'));
		if ($data['day'] > $lastDayOfMonth) {
			$errors[] = "Введите корректную дату рождения";
		}
	}
	if (empty($errors)) {
		$user = array(
			'email' => $data['mail'],
			'login' => $data['login'],
			'password' => md5($data['password']),
			'date_birth' => $data['year'] . "-" . $data['month']. "-" . $data['day']
			);

	}
}
include 'block/header.php';
include 'block/sidebar.php';
?>
<div class="content">
                <div class="border">
                    
                </div>
            </div>
<?php
include 'block/footer.php';
?>