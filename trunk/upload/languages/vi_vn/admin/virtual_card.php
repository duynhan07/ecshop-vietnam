<?php
/*------------------------------------------------------ */
//-- Card information
/*------------------------------------------------------ */
$_LANG['virtual_card_list'] = 'Virtual Goods List';
$_LANG['lab_goods_name'] = 'Name:';
$_LANG['replenish'] = 'Replenish';
$_LANG['lab_card_id'] = 'ID';
$_LANG['lab_card_sn'] = 'NO.';
$_LANG['lab_card_password'] = 'Mật khẩu';
$_LANG['lab_end_date'] = 'Hạn chót';
$_LANG['lab_is_saled'] = 'Saled';
$_LANG['lab_order_sn'] = 'Mã đ.hàng';
$_LANG['action_success'] = 'Thực thi thao tác thành công';
$_LANG['action_fail'] = 'Thực thi thao tác thành công';
$_LANG['card'] = 'Danh sách thẻ ảo';

$_LANG['batch_card_add'] = 'Batch add products';
$_LANG['download_file'] ='Download batch CSV files.';
$_LANG['separator'] = 'Ký tự phân tách';
$_LANG['uploadfile'] = 'Upload tệp';
$_LANG['sql_error'] = 'NO. %s information was wrong:<br /> ';

/*  Prompting message */
$_LANG['replenish_no_goods_id'] = 'Lack of product ID parameter, can\'t replenish products';
$_LANG['replenish_no_get_goods_name'] = 'Product ID parameter was wrong, can\'t get product name';
$_LANG['drop_card_success'] = 'Đã xóa thành công';
$_LANG['batch_drop'] = 'Xóa 1 loạt';
$_LANG['drop_card_confirm'] = 'Bạn có chắc bạn muốn xóa dữ liệu này?';
$_LANG['card_sn_exist'] = 'Card NO. %s already exist,please enter again';
$_LANG['go_list'] = 'Quay lại';
$_LANG['continue_add'] = 'Tiếp tục thêm';
$_LANG['uploadfile_fail'] = 'Upload tệp tin không thành công';
$_LANG['batch_card_add_ok'] = 'Đã thêm %s thẻ ảo';

$_LANG['js_languages']['no_card_sn'] = 'Card NO. or Card Password is blank.';
$_LANG['js_languages']['separator_not_null'] = 'Ký tự phân tách không được để trống.';
$_LANG['js_languages']['uploadfile_not_null'] = 'Vui lòng chọn tệp tin để upload.';



$_LANG['use_help'] = 'Trợ giúp:' .
        '<ol>' .
          '<li>Upload file should be CSV file<br />' .
              'Sequential fill in every row by card ID, password, deadline, these item set off by \',\' or \';\' . But nonsupport \'blank\'<br />'.
          '<li>Password and deadline can be blank, deadline format should be \'2006-11-6\' or \'2006/11/6\''.
          '<li>You had better not use chinese in the file to avoid junk.</li>' .
        '</ol>';

/*------------------------------------------------------ */
//-- Change encrypt string
/*------------------------------------------------------ */

$_LANG['virtual_card_change'] = 'Đổi chuỗi mã hóa';
$_LANG['user_guide'] = 'Chỉ dẫn:' .
        '<ol>' .
          '<li>Encrypt string use for ID and passwrod of encrypt virtual card</li>' .
          '<li>Encrypt string saved in data/config.php, corresponding constants is AUTH_KEY</li>' .
          '<li>If you want to change encrypt string, enter old encrypt string and new encrypt string in the textbox, check \'Confirm\' push the button</li>' .
        '</ol>';
$_LANG['label_old_string'] = 'Chuỗi mã hóa cũ';
$_LANG['label_new_string'] = 'Chuỗi mã hóa mới';

$_LANG['invalid_old_string'] = 'Chuỗi mã hóa cũ không đúng';
$_LANG['invalid_new_string'] = 'Chuỗi mã hóa mới không đúng';
$_LANG['change_key_ok'] = 'Đã đổi chuỗi mã hóa thành công';
$_LANG['same_string'] = 'Chuỗi mã hóa cũ và mới giống nhau';

$_LANG['update_log'] = 'Log cập nhật';
$_LANG['old_stat'] = 'Tổng cộng %s bản ghi. %s bản ghi đã được mã hóa bởi chuỗi mã hóa mới, %s bản ghi đã được mã hóa bởi chuỗi mã hóa cũ(chờ cập nhật), %s bản ghi đã được mã hóa bởi chuỗi mã hóa không xác định.';
$_LANG['new_stat'] = '<strong>Cập nhật thành công</strong>, hiện tại có %s bản ghi được mã hóa bởi chuỗi mã hóa mới, %s bản ghi đã được mã hóa bởi chuỗi mã hóa không xác định.';
$_LANG['update_error'] = 'Cập nhật đã lỗi: %s';
$_LANG['js_languages']['updating_info'] = '<strong>Đang cập nhật</strong>(Mỗi lần 100 bản ghi)';
$_LANG['js_languages']['updated_info'] = '<strong>Đã cập nhật xong</strong> <span id=\"updated\">0</span> bản ghi.';
?>