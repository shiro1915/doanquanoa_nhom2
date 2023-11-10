<?php
    ob_start();
    session_start();

    $URL = 'index.php?url=';

    require_once "model/pdo_library.php";
    require_once "model/san-pham.php";

    require_once "components/head.php";
    require_once "components/header.php";
    
    
    

    


    if(!isset($_GET['url'])) {
        require_once "views/home.php";
    }else {
        switch ($_GET['url']) {
            case 'trang-chu':
                         
                require_once "views/home.php";
                break;
            case 'cua-hang':
                         
                require_once "views/shop.php";
                break;
            case 'chitietsanpham':
                

                
                break;
            case 'khoa-hoc':    
                
                require_once "views/courses.php";
                break;
            
            case 'chi-tiet-khoa-hoc':    
                
                require_once "views/course-details.php";
                break; 
                
            case 'lien-he':    
                require_once "views/contact.php";
                break;
            case 'gio-hang':    
                require_once "views/cart.php";
                break;
            case 'thanh-toan':    
                require_once "views/checkout.php";
                break;  
            case 'don-hang':    
                require_once "views/my-order.php";
                break;       
            case 'chi-tiet-don-hang':    
                require_once "views/my-orderdetails.php";
                break; 
            default:
                require_once "views/not-page.php";
                break;
        }
    }

    require_once "components/minicart.php";

    require_once "components/footer.php";


    
    ob_end_flush();
?>
<br>

