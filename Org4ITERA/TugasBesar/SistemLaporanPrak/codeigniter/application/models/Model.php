<?php
class Model extends CI_Model {
  public function getDataUser($username){
    return $data = $this->db->select("*")
    ->from("tbl_user")
    ->where("tbl_user.username",$username)
    ->get();
  }
  public function getNilai(){
    return $data = $this->db->select("*")
                        ->from("tbl_nilai")
                        ->get();
  }
  public function setNilai($data,$table){
    $this->db->insert($table,$data);
    return true;
  }
  public function updateNilai($param_id,$id,$table,$data){
    // $this->db->set($data);
    $this->db->where($param_id,$id);
    $this->db->update($table,$data);
    return true;
  }
  public function deleteNilai($param_id,$id,$table){
    $this->db->delete($table, array($param_id=>$id));
    return true;
  }
}
?>
