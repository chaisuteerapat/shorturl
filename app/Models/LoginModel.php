<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{

  protected $_table = 'member';

  public function checklogin($val)
  {
    $builder = $this->db->table($this->_table);
    $builder->select('member_id,member_name,member_lname,member_role');
    $builder->where('member_user', $val['username']);
    $builder->where('member_password', md5($val['password']));
    $builder->where('member_status', 'A');
    $query = $builder->get();
    return $query->getRow();
  }
}
