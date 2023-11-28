

<?php
    ob_start();
    session_start();
    require_once "models_admin/pdo_library.php";
    require_once "models_admin/BaseModel.php";
    require_once "models_admin/CategoryModel.php";
    require_once "models_admin/ProductModel.php";
    require_once "models_admin/CustomerModel.php";
    require_once "models_admin/OrderModel.php";

    require_once "components/head.php";
    require_once "components/header.php";
    
    

    if(!isset($_GET['quanli'])) {
        require_once "home.php";
    }else {
        switch ($_GET['quanli']) {
            case 'danh-sach-san-pham':
                require_once "san-pham/list.php";         
                break;
            case 'them-san-pham':
                         
                require_once "san-pham/add.php";   
                break;
            case 'cap-nhat-san-pham':
                require_once "san-pham/edit.php";   
                break;
            case 'thung-rac-san-pham':
                require_once "san-pham/recycle-bin.php";   
                break;
            // Danh mục
            case 'danh-sach-danh-muc':
                
                require_once "danh-muc/list.php";         
                break;
            case 'them-danh-muc':
                         
                require_once "danh-muc/add.php";   
                break;
            case 'cap-nhat-danh-muc':
                
                require_once "danh-muc/edit.php";   
                
                break;
            // Đơn hàng    
            
            case 'danh-sach-don-hang':

                require_once "don-hang/list.php";         
                break;
            case 'cap-nhat-don-hang':

                require_once "don-hang/edit.php";         
                break;
            // Bài viết
            case 'danh-sach-bai-viet':

                require_once "bai-viet/list.php";         
                break;
            case 'them-bai-viet':

                require_once "bai-viet/add.php";         
                break;
            case 'cap-nhat-bai-viet':
                require_once "bai-viet/edit.php";         
                break;    
            case 'danh-muc-bai-viet':

                require_once "bai-viet/category.php";         
                break;
            
            // Khách hàng
            case 'danh-sach-khach-hang':

                require_once "khach-hang/list.php";         
                break;    

            default:
                require_once "components/404.php";
                break;
        }
    }

    require_once "components/footer.php";


    
    ob_end_flush();
?>


