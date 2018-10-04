<?php


class Order_model extends CI_Model
{
    function __construct() {
        parent::__construct();
    }


    public function addOrder($data) {
        if ($this->db->insert("order_details",$data)) {
            $insert_id = $this->db->insert_id();
            return  $insert_id;
        }
        else{
            echo "error found";
            return false;
        }
    }

    public function addOrderFile($data) {
        if ($this->db->insert("order_files",$data)) {
            return  true;
        }
        else{
            echo "error found";
            exit;
        }
    }
    public function deleteOrderFiles($orderid) {
        $this->db->delete("order_files", "order_id_fk = ".$orderid);
        return true;
    }
    public function updateOrder($data,$orderid) {
        $this->db->set($data);
        $this->db->where("order_detail_id", $orderid);
        $this->db->update("order_details", $data);
        return true;
    }

    public function orderDelete($orderid) {
        if ($this->db->delete("order_details", "order_detail_id = ".$orderid)) {
            return true;
        }
    }

    public function revisionOrder($orderid) {
        $this->db->insert("revisions", $orderid); 
            return  true;
    } 
        public function save_revision_data($data) {   // insert files into revisions files table

        $this->db->insert('revision_files',$data);
          $this->db->insert_id();
        return true;

    }

    public function requestRevisionOrder($orderdata) {
        $this->db->insert("revisions", $orderdata); 
        $lastId =  $this->db->insert_id();
            return  $lastId;
    }   

    public function get_single_order_files($orderdetailid)
 {
    $this->db->where('order_id_fk',$orderdetailid);
    $data = $this->db->get('order_files');
    return $data->result();
 }

   public function show_submission_to_client($clientEmail){
        $this->db->select("*");
        $this->db->from("submissions");
        $this->db->join('order_details', 'order_details.order_detail_id = submissions.order_id');
        $this->db->join('submission_files', 'submissions.submission_id = submission_files.submission_id');
        $this->db->where('client_email',$clientEmail);
         $this->db->where('order_details.payment_status !=', 2);
         $this->db->where('submissions.status !=',0);
        $this->db->group_by('order_details.order_detail_id');
        $this->db->order_by('submissions.submission_id','DESC');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;

   }
   
   public function insert_payment($data)
   {
       $this->db->insert('tbl_payments',$data);
       return true;
   }
   
    public function getorder_with_id($orderid)
    {
        $this->db->where('order_detail_id',$orderid);
        return $this->db->get('order_details')->row()->payment_status;
    }
        public function get_last_revision_id($orderid) {
       
     $query = $this->db->query("SELECT * FROM revisions WHERE order_id = '$orderid' ORDER BY revision_id DESC LIMIT 1");
        $result = $query->row();
         return $result;
    }  


   public function total_submissions($clientEmail){
        $this->db->select('*');
        $this->db->from("submissions");
        $this->db->join('order_details', 'order_details.order_detail_id = submissions.order_id');
        $this->db->join('submission_files', 'submissions.submission_id = submission_files.submission_id');
        $this->db->join('submission_report_files', 'submissions.submission_id = submission_report_files.submission_id_fk');
        $this->db->where('client_email',$clientEmail);
        $this->db->where('order_details.payment_status !=', 2);
        $this->db->where('submissions.status !=',0);
        $this->db->where('submissions.show_submission_client =',0);
        $this->db->group_by('submissions.submission_id');
        $query_result = $this->db->get();
        $result = $query_result ->num_rows();
        if($result>0)
                return $result;
            else return 0;
   }

   public function update_total_submissions($submission_id,$dataStatus){
         $this->db->set($dataStatus);
        $this->db->where("submission_id", $submission_id);
        $this->db->update("submissions", $dataStatus);
        return true;
   }
   
   public function total_revisions($clientEmail){
        $this->db->select('*');
        $this->db->from("revised_work");
        $this->db->join('order_details', 'order_details.order_detail_id = revised_work.order_id');
        $this->db->join('revised_work_files', 'revised_work_files.revised_work_id = revised_work.revised_work_id');
        $this->db->group_by('revised_work.revised_work_id');
        $this->db->where('order_details.client_email',$clientEmail);
        $this->db->where('revised_work.status !=',1);
        $query_result = $this->db->get();
        $result = $query_result ->num_rows();
        if($result>0)
                return $result;
            else return 0;
   }

   public function update_total_rivisions($revision_id,$dataStatus){
         $this->db->set($dataStatus);
        $this->db->where("revision_id", $revision_id);
        $this->db->update("revised_work", $dataStatus);
        return true;
   }
   
   public function get_order_details($orderid){
       
       
   	   $this->db->where('order_detail_id',$orderid);
   return $this->db->get('order_details')->row();
   }
}