<?php
class wp2024orders
{
    private $_orders = '';
    public function __construct(){
        global $wpdb;
        $this->_orders = $wpdb->prefix.'wp2024_orders';//wp2024_orders
        $this->_orders_detail = $wpdb->prefix.'wp2024_orders_detail';//wp2024_orders_detail
        // $this->_post_meta = $wpdb->prefix
        $this->_postmeta = $wpdb->prefix.'postmeta';//wp_postmeta
    }
    
   
    public function all(){
        global $wpdb;
        $sql = " SELECT * FROM $this->_orders ";
        $items = $wpdb->get_results($sql);
        return $items;
    }
    public function paginate($limit = 20){
        global $wpdb;
        //pr($_REQUEST);
        $s = isset( $_REQUEST['s'] ) ? $_REQUEST['s'] : '';
        $status = isset( $_REQUEST['status'] ) ? $_REQUEST['status'] : '';
        $paged = isset( $_REQUEST['paged'] ) ? $_REQUEST['paged'] : 1;
        //$paged =1;
        //Lấy tổng số record
        $sql = "SELECT count(id) FROM $this->_orders WHERE deleted = 0";
        //Tìm kiếm 
        if($s){
            $sql .=" AND ( custommer_name LIKE '%$s%' OR custommer_phone LIKE '%$s%' )";
        }
        if($status){
            $sql .=" AND status = '$status'";
        }
        
        $total_items = $wpdb->get_var($sql);

       //Thuật toán phân trang
        /*
        Giới hạn bản ghi:limit,
        Tổng số trang: total_pages,
        Tính offset
        */
        $total_pages = ceil($total_items / $limit);
        $offset = ( $paged * $limit ) - $limit;

        $sql ="SELECT * FROM $this->_orders WHERE deleted = 0";
        
        if($s){
            $sql .=" AND ( custommer_name LIKE '%$s%' OR custommer_phone LIKE '%$s%' )";
        }

        if($status){
            $sql .=" AND status = '$status'";
        }
        $sql .=" ORDER BY id DESC";
        $sql .=" LIMIT $limit OFFSET $offset";
        //var_dump($sql);
        $items = $wpdb->get_results($sql);     
        return [
            'total_pages' => $total_pages,
            'total_items' => $total_items,
            'items'=> $items,

        ];
    }

    public function find($id){
        global $wpdb;
        $sql = "SELECT * FROM $this->_orders where id= $id";
        $items = $wpdb->get_row($sql);
        return $items;
    }

    public function save($data){
        global $wpdb;
        $wpdb->insert($this->_orders,$data);
        $lastId = $wpdb->insert_id;
        $items = $this->find($lastId);
        return $items;
        
    }

    public function update($id,$data){
        global $wpdb;
        $wpdb->update($this->_orders,$data,[
            'id' => $id
        ]);
        $items = $this->find($id);
        return $items;
    }

    public function destroy($id){
        global $wpdb;
        $wpdb->delete($this->_orders,[
            'id' => $id
        ]);
        return true;
    }

    
    public function change_status($orderid,$status){
        global $wpdb;
        $wpdb->update(
            $this->_orders,
            [
                'status'=> $status
            ],
            [
                'id'=> $orderid
            ]);
        return true;
    }
   
    public function trash($id){
        global $wpdb;
        $wpdb->update(
            $this->_orders,
            [
                'deleted'=> 1

            ],
            [
                'id'=> $id
            ]);
        return true;
    }

    public function order_item($order_id)
    {
        global $wpdb;
        $sql = "SELECT products.post_title,order_detail.* FROM $this->_orders_detail as order_detail
        JOIN $wpdb->posts as products on order_detail.product_id = products.ID  where order_detail.order_id= $order_id
        ORDER BY order_detail.id DESC";
        $items = $wpdb->get_results($sql); 
        return $items;
    }


 
}