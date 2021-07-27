<?php

namespace App\Models;

use CodeIgniter\Model;

class UrlModel extends Model
{

  protected $_table = 'short_url';

  public function setshort($url)
  {
    $length = 8;
    $chars = "abcdfghjkmnpqrstvwxyz|ABCDFGHJKLMNPQRSTVWXYZ|0123456789";
    $sets = explode('|', $chars);
    $all = '';
    $randString = '';
    foreach ($sets as $set) {
      $randString .= $set[array_rand(str_split($set))];
      $all .= $set;
    }
    $all = str_split($all);
    for ($i = 0; $i < $length - count($sets); $i++) {
      $randString .= $all[array_rand($all)];
    }
    $randString = str_shuffle($randString);
    return $randString;
  }

  public function checkurl($url)
  {
    $builder = $this->db->table($this->_table);
    $builder->select('short_url_id');
    $builder->where('short_url_full', $url);
    $query = $builder->get();
    return $query->getRow();
  }

  public function checkisshorturl($url)
  {
    $builder = $this->db->table($this->_table);
    $builder->select('short_url_id,short_url_full');
    $builder->where('short_url_short', $url);
    $query = $builder->get();
    return $query->getRow();
  }

  public function getallUrl()
  {
    $builder = $this->db->table($this->_table);
    $builder->where('short_url_status', "A");
    $query = $builder->get();
    return $query->getResultArray();
  }

  public function saveUrl($val)
  {
    $builder = $this->db->table($this->_table);
    $data = array(
      'short_url_full' => $val['url'],
      'short_url_short' => $this->setshort($val['url']),
      'short_url_fileqrcode' => $val['file'],
      'short_url_status' => 'A',
      'short_url_datecreate' => Date('Y-m-d H:i:s'),
    );
    return $builder->insert($data);
  }

  // public function updatecount($id, $count)
  // {
  //   $data = array(
  //     'short_url_count' => $count,
  //   );
  //   $builder = $this->db->table($this->_table);
  //   return $builder->update($data, ['short_url_id' => $id]);
  // }

  // public function del($id)
  // {
  //   $builder = $this->db->table($this->_table);
  //   return $builder->delete(['id' => $id]);
  // }
}
