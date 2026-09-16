<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 
class Users extends Model
{
    
    public $name = "";
    public $email = "";
    public $password = "";
    public $email_verified_at_date_time = "";
    public $password_hash = "";
    public $role_id = 0;
}
 