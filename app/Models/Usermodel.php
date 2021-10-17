<?php
namespace App\Models
use CodeIgniter\Model


class Usermodel extends Model{

	protected $table ="register";
	protected $allowfileds =['fname','lname','username','password']
}
?>