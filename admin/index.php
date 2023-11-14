

<?php
    ob_start();
    session_start();


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
            // Khóa học
            case 'danh-sach-khoa-hoc':

                require_once "khoa-hoc/list.php";         
                break;
            case 'them-khoa-hoc':
                         
                require_once "khoa-hoc/add.php";   
                break;
            case 'cap-nhat-khoa-hoc':
                require_once "khoa-hoc/edit.php";   
                break; 
            //Video
            case 'video-khoa-hoc':

                require_once "video-courses/list.php";         
                break;
            case 'them-video':
                         
                require_once "video-courses/add.php";   
                break;
            case 'cap-nhat-video':
                require_once "video-courses/edit.php";   
                break;   
                
            // Đơn hàng    
            
            case 'danh-sach-don-hang':

                require_once "don-hang/list.php";         
                break;
            case 'cap-nhat-don-hang':

                require_once "don-hang/edit.php";         
                break;

            default:
                require_once "components/404.php";
                break;
        }
    }

    require_once "components/footer.php";


    
    ob_end_flush();
?>


