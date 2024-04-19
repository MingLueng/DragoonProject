<?php
add_action('rest_api_init','wp2024_apis');

function wp2024_apis(){
    $namespace = 'wp2024/v1';
    $base ='orders';
    //http://yourdomain.com/wp-json/wp2024/v1/orders
    register_rest_route($namespace,'/'.$base,
        [ ///wp2024/v1/orders
            [
                'method' => WP_REST_Server::READABLE,//GET
                'callback' => 'wp2024_apis_order_all'
            ],
            [
                'method' => WP_REST_Server::CREATABLE,//POST
                'callback' => 'wp2024_apis_order_store'
            ]
        ]);
        //http://yourdomain.com/wp-json/wp2024/v1/orders/5
    register_rest_route($namespace,'/'.$base.'/(?P<id>[\d]+)',
        [
            [
                'method' => WP_REST_Server::READABLE,//GET
                'callback' => 'wp2024_apis_order_show'
            ],
            [
                'method' => WP_REST_Server::EDITABLE,//PUT
                'callback' => 'wp2024_apis_order_update'
            ],
            [
                'method' => WP_REST_Server::DELETABLE,//DELETE
                'callback' => 'wp2024_apis_order_destroy'
            ]
        ]);
    register_rest_route($namespace,'/'.$base.'/(?P<id>[\d]+)/order_items',
        [
            
                'method' => WP_REST_Server::READABLE,//GET
                'callback' => 'wp2024_apis_order_order_items'
            
           
        ]);
}
//GET -/orders - lấy toàn bộ orders
function wp2024_apis_order_all($request){
    $objwp2024orders = new wp2024orders();
	$results = $objwp2024orders->paginate(3);
    $data = [
        'success' => true,
        'data' => $results
    ];
    return new WP_REST_Response($data,200);
    
    //echo json_encode($results);
    //echo 'wp2024_apis_order_all';
    //die();
}
//POST -/orders - thêm mới toàn bộ orders
function wp2024_apis_order_store($request){
    $objwp2024orders = new wp2024orders();
	$saved = $objwp2024orders->save($_POST);
    $data = [
        'success' => true,
        'data' => $saved
    ];
    return new WP_REST_Response($data,200);
}
//GET -/orders - lấy chi tiết orders theo tham số id
function wp2024_apis_order_show($request){
    $id = $request['id'];
    $objwp2024orders = new wp2024orders();
	$item = $objwp2024orders->find($id);
    $data = [
        'success' => true,
        'data' => $item
    ];
    return new WP_REST_Response($data,200);
}
//PUT -/orders - sửa toàn bộ orders theo tham số id
function wp2024_apis_order_update($request){
    $id = $request['id'];
    $objwp2024orders = new wp2024orders();
	$item = $objwp2024orders->update($id,$_POST);
    $data = [
        'success' => true,
        'data' => $item
    ];
    return new WP_REST_Response($data,200);
}
//DELETE -/orders - xóa toàn bộ orders theo tham số id
function wp2024_apis_order_destroy($request){
    $id = $request['id'];
    $objwp2024orders = new wp2024orders();
	$item = $objwp2024orders->destroy($id);
    $data = [
        'success' => true,
    ];
    return new WP_REST_Response($data,200);
}

function wp2024_apis_order_order_item($request){
    $id = $request['id'];
    $data = [
        'success' => true,
        'message' => 'Bạn lấy kết quả của orderid '.$id.'thành công',
    ];
    return new WP_REST_Response($data,200);
}

?>
