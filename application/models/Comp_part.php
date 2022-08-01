<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Comp_part extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }
    public function insert_comp_part()
    {
        $datetime = date("Y-m-d H:i:s");
        foreach ($_POST['kanban'] as $key => $value) {
            $address = $_POST['address'];
            $Part_No = $_POST['Part_No'];
            $user_id = $_SESSION['ID'];
            $lot = substr($value, 5, 3);
            $page = substr($value, 8, 2);
            $partID = substr($value, 1, 4);
            $kb_type = substr($value, 0, 1);
            $query = $this->db->query(
                "SELECT * FROM TB_PARTALL where PartID = '$partID'"
            );
            $res = $query->result();
            $query = $this->db->query(
                "SELECT * FROM TB_PARTALL where PartID = '$partID'"
            );
            $res = $query->result();
            $qty = $res[0]->Qty;
            $part_name = ($res[0]->Part_Name);
            print_r($value);
            $sql = "INSERT INTO TB_COMPONENT_PART (Datetime_ID,Part_No, Address, Kanban,User_id,Lot,Page,Qty,Part_id,Part_name,Kanban_type) VALUES 
                ('$datetime','$Part_No', '$address', '$value','$user_id','$lot','$page',$qty,'$partID','$part_name','$kb_type');";
            $this->db->simple_query($sql);
            echo $sql;
        }
    }

    public function banUser()
    {
        $user_id = $_POST['user_id'];
        $ip = $_POST['ip'];
        $user_id = $_POST['user_id'];
        // $sql = "INSERT INTO TB_COMPONENT_PART_BAN (ip_or_userid) VALUES ('$ip');";
        // $this->db->simple_query($sql);
        $sql = "INSERT INTO TB_COMPONENT_PART_BAN (ip_or_userid) VALUES ('$user_id');";
        $this->db->simple_query($sql);
        $sql = "INSERT INTO TB_COMPONENT_PART_LOG (Type,status,IP,UserID) VALUES ('Ban','success','$ip','$user_id');";
        $this->db->simple_query($sql);
    }
    public function save_error()
    {
        $kanban = $_POST['kanban'];
        $address = $_POST['address'];
        $user_id = $_SESSION['ID'];
        $sql = "INSERT INTO TB_COMPONENT_PART_ERROR (UserID,Kanban,Address) VALUES ('$user_id','$kanban','$address');";
        $this->db->simple_query($sql);
    }

    
}
