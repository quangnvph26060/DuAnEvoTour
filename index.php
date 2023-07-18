<?php
//model

require_once "model/pdo.php";
require_once "model/tours.php";
require_once "model/categories_tour.php";
require_once "model/users.php";
require_once "model/contact.php";
require_once "model/news.php";
require_once "model/cart.php";
require_once "model/orders_tour.php";
require_once "model/comment.php";

// //controller

require_once "controller/controller.php";
require_once "controller/home_controller.php";
require_once "controller/tour_controller.php";
require_once "controller/yeuthich_controller.php";
require_once "controller/account_controller.php";
require_once "controller/contact_controller.php";
require_once "controller/about_controller.php";
require_once "controller/404_controller.php";
require_once "controller/news_controller.php";
require_once "controller/faq_controller.php";
require_once "controller/login_controller.php";
require_once "controller/signup_controller.php";
require_once "controller/categories_controller.php";
require_once "controller/news_controller.php";
require_once "controller/validate.php";
require_once "controller/order_controller.php";
require_once "controller/bill_controller.php";
require_once "controller/bill_confirm_controller.php";
require_once "controller/list-setting.php";


$ctr = isset($_GET['ctr']) ? $_GET['ctr'] : '/';

switch ($ctr) {
    case '/':
    case 'home':
        home();
        break;
    case 'about':
        about();
        break;
    case 'contact':
        contact();
        break;
    case 'yeu_thich_del':
        yeu_thich_del();
        break;
    case 'show-setting';
        show_setting();
        break;
    case 'update-setting';
        setting_update();
        break;
    case 'edit_setting':
        edit_setting_ctr();
        break;
        // sắp xếp
    case 'A-Z':
        asc_az_ctr();
        break;
    case 'Z-A':
        desc_za_ctr();
        break;
    case 'tangdan':
        ascprice_ctr();
        break;
    case 'giamdan':
        descprice_ctr();
        break;
    case 'yeu_thich':
        yeu_thich_ctr();
        break;
    case 'show_yeu_thich':
        show_yeu_thich();
        break;
    case 'add-contact':
        add_contact_ctr();
        break;
    case 'tourDL':
        show_tourDL_ctr();
        break;
    case 'tourDL_3mien':
        show_tour_3mien_ctr();
        break;
    case 'tourKM':
        show_tourKM_ctr();
        break;
    case 'news':
        news();
        break;
    case 'faq':
        faq();
        break;
    case 'login':
        login();
        break;
    case 'signup':
        signup();
        break;
    case 'tour_detail':
        tour_detail_ctr();
        break;
    case 'news_detail':
        news_detail_ctr();
        break;
    case 'show_staffs_admin':
        show_admin_staffs_ctr();
        break;
    case 'show_customers_admin':
        show_admin_customers_ctr();
        break;
    case 'show_contact_admin':
        contact_ctr();
        break;
    case 'show_news_admin':
        news_ctr();
        break;
    case 'show_tours_admin':
        show_admin_tours_ctr();
        break;
    case 'show_categories_admin':
        categories_ctr();
        break;
    case 'add-staff':
        add_staff_ctr();
        break;
    case 'add-news':
        add_news_ctr();
        break;
    case 'add-tour':
        add_tour_ctr();
        break;
    case 'add-category':
        add_category_ctr();
        break;
    case 'save_add_staff':
        insert_staff_ctr();
        break;
    case 'save_add_news':
        insert_news_ctr();
        break;
    case 'save_add_tour':
        insert_tour_ctr();
        break;
    case 'save_add_category':
        insert_category_ctr();
        break;
    case 'delete-staff':
        delete_staff_ctr();
        break;
    case 'delete-news':
        delete_news_ctr();
        break;
    case 'delete-customer':
        delete_customer_ctr();
        break;
    case 'delete-tour':
        delete_tour_ctr();
        break;
    case 'delete-categories':
        delete_category_ctr();
        break;
    case 'update-customer':
        update_customer_ctr();
        break;
    case 'update-staff':
        update_staff_ctr();
        break;
    case 'update-news':
        update_news_ctr();
        break;
    case 'update-tour':
        update_tour_ctr();
        break;
    case 'update-categories':
        update_category_ctr();
        break;
    case 'edit-news':
        edit_news_ctr();
        break;
    case 'edit-customer':
        edit_customer_ctr();
        break;
    case 'edit-account':
        edit_account_ctr();
        break;
    case 'edit-staff':
        edit_staff_ctr();
        break;
    case 'edit-tour':
        edit_tour_ctr();
        break;
    case 'edit-categories':
        edit_category_ctr();
        break;
        // case 'tour_cheap':
        //     tour_cheap_ctr();
        //     break;
    case 'search_tour':
        search_tour_ctr();
        break;
    case 'search_tours':
        search_tours_ctr();
        break;
    case 'home_admin':
        home_admin();
        break;
    case 'tour_like':
        tour_like_ctr();
        break;
    case 'login_acc':
        log_user_ctr();
        break;
    case 'logout_acc':
        logout_user_ctr();
        break;
    case 'signup_acc':
        sign_user_ctr();
        break;
    case 'account_detail':
        account_detail();
        break;
    case 'change_pass':
        change_pass_ctr();
        break;
    case 'edit_pass':
        edit_pass_ctr();
        break;
    case 'my_cart':
        my_cart();
        break;
    case 'bill':
        bill_ctr();
        break;
    case 'bill_confirm':
        bill_confirm();
        break;
        case 'delete_dh':
            my_cart_del();
            break;
    case 'bill_del':
        bill_del();
        break;
    case 'gio_hang':
        gio_hang();
        break;
    case 'del_dh':
        if (isset($_SESSION['bill'])) {
            unset($_SESSION['bill']);
        }
        header("location:?ctr=home");
        break;
    case 'show_orders_admin':
        show_orders_ctr();
        break;
    case 'delete-orders':
        delete_orders_ctr();
        break;
    case 'update-orders':
        update_orders_ctr();
        break;
    case 'edit-orders':
        edit_orders_ctr();
        break;
    case 'binhluan':
        if (isset($_POST['binh_luan'])) {
            $id_tour = $_POST['id_tour'];
            $noidung = $_POST['noidung'];
            $id_user =    $_SESSION['user']['id_users'];
            $ngaybinhluan = date('d/m/Y');
            $binhluan = insert_bl($id_tour, $noidung, $id_user, $ngaybinhluan);
            header("location:?ctr=tour_detail&id_tour=" . $id_tour);
        }
        break;
    case 'mienbac':
        show_mienbac_ct();
        break;
    case 'miennam':
        show_miennam_ct();
        break;
    case 'mientrung':
        show_mientrung_ct();
        break;
    case 'tourDL_mb':
        tour_all();
        break;
    case 'miss_password':
        miss_password_ctr();
        break;
    case 'thanhpho':
        khoihanh();
        break;
    default:
        show_404();
}
