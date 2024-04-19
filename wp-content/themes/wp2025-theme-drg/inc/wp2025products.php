<?php
class wp2025products
{
    private $_products = '';
    public function __construct(){
        global $wpdb;    
        $this->_posts = $wpdb->prefix.'posts';//wp_posts
        $this->_postmeta = $wpdb->prefix.'postmeta';//wp_postmeta
    }
    

    public function product_item($post_id)
    {
        global $wpdb;
        $sql = "SELECT pos.meta_key,pro.* FROM $this->_posts as pro JOIN $wpdb->postmeta as pos on pro.ID = pos.post_id where pro.ID =$post_id
        ORDER BY pro.ID desc";
        $items = $wpdb->get_results($sql);
        return $items;
    }


 
}