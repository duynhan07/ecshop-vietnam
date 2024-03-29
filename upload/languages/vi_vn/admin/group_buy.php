<?php
/* Current page title and useable link name */
$_LANG['group_buy_list'] = 'Danh sách nhóm mua';
$_LANG['add_group_buy'] = 'Thêm nhóm mua';
$_LANG['edit_group_buy'] = 'Sửa';

/* Trang danh sách nhóm mua */
$_LANG['goods_name'] = 'Tên sản phẩm';
$_LANG['start_date'] = 'Ngày bắt đầu';
$_LANG['end_date'] = 'Hạn chót';
$_LANG['deposit'] = 'Tiền bảo hiểm';
$_LANG['restrict_amount'] = 'Số lượng giới hạn';
$_LANG['gift_integral'] = 'Present points';
$_LANG['valid_order'] = 'Đơn hàng';
$_LANG['valid_goods'] = 'Order product';
$_LANG['current_price'] = 'Giá hiện tại';
$_LANG['current_status'] = 'Trạng thái';
$_LANG['view_order'] = 'Xem đơn hàng';

/* Add/Edit associates page */
$_LANG['goods_cat'] = 'Danh mục';
$_LANG['all_cat'] = 'Tất cả danh mục';
$_LANG['goods_brand'] = 'Thương hiệu';
$_LANG['all_brand'] = 'Tất cả thương hiệu';

$_LANG['label_goods_name'] = 'Associates product:';
$_LANG['notice_goods_name'] = 'Please search product, create options list...';
$_LANG['label_start_date'] = 'Ngày bắt đầu:';
$_LANG['label_end_date'] = 'Hạn cuối:';
$_LANG['notice_datetime'] = '(Ngày Tháng Năm - Giờ)';
$_LANG['label_deposit'] = 'Tiền bảo hiểm:';
$_LANG['label_restrict_amount'] = 'Số lượng giới hạn:';
$_LANG['notice_restrict_amount']= 'Reach the quantity, associates stop automatically. 0 means no limit quantity.';
$_LANG['label_gift_integral'] = 'Present points:';
$_LANG['label_price_ladder'] = 'Bước giá:';
$_LANG['notice_ladder_amount'] = 'Reach quantity';
$_LANG['notice_ladder_price'] = 'Giá';
$_LANG['label_desc'] = 'Mô tả:';
$_LANG['label_status'] = 'Trạng thái';
$_LANG['gbs'][GBS_PRE_START] = 'Đang c.bị';
$_LANG['gbs'][GBS_UNDER_WAY] = 'In progress';
$_LANG['gbs'][GBS_FINISHED] = 'Finished but undisposed';
$_LANG['gbs'][GBS_SUCCEED] = 'Thành công';
$_LANG['gbs'][GBS_FAIL] = 'Không thành công';
$_LANG['label_order_qty'] = 'Order quantity / Effective order quantity:';
$_LANG['label_goods_qty'] = 'Product quantity / Effective product quantity:';
$_LANG['label_cur_price'] = 'Giá hiện tại:';
$_LANG['label_end_price'] = 'End price:';
$_LANG['label_handler'] = 'Operator:';
$_LANG['error_group_buy'] = 'The associates is nonexistent.';
$_LANG['error_status'] = 'You can\'t execute the operation in the current state!';
$_LANG['button_finish'] = 'Finished';
$_LANG['notice_finish'] = '(Set the end date as current date)';
$_LANG['button_succeed'] = 'Succeed';
$_LANG['notice_succeed'] = '(Update order price)';
$_LANG['button_fail'] = 'Failed';
$_LANG['notice_fail'] = '(Cancel order, insurance refund to account balance, fail reason can be record in directions)';
$_LANG['cancel_order_reason'] = 'Associates failed.';
$_LANG['js_languages']['succeed_confirm'] = 'The operation is nonreversible, are you sure set the associates as success?';
$_LANG['js_languages']['fail_confirm'] = 'The operation is nonreversible, are you sure set the associates as failure?';
$_LANG['button_mail'] = 'Gửi email';
$_LANG['notice_mail'] = '(Notice customer pay the rest money for shipping)';
$_LANG['mail_result'] = 'There are %s availably orders, send %s mails successfully.';
$_LANG['invalid_time'] = 'You have entered an invalid buy time.';

$_LANG['add_success'] = 'Đã thêm mới thành công';
$_LANG['edit_success'] = 'Chỉnh sửa thành công';
$_LANG['back_list'] = 'Quay lại';
$_LANG['continue_add'] = 'Tiếp tục thêm';

/* Add/Edit associates submit */
$_LANG['error_goods_null'] = 'Please select product of associates!';
$_LANG['error_goods_exist'] = 'There is an associates for your selected product!';
$_LANG['error_price_ladder'] = 'Please enter an effective price step value!';
$_LANG['error_restrict_amount'] = 'Sales quantity is less than the price ladder should not the largest quantity';

$_LANG['js_languages']['error_goods_null'] = 'Please select product of associates!';
$_LANG['js_languages']['error_deposit'] = 'Insurance must be an integer!';
$_LANG['js_languages']['error_restrict_amount'] = 'Số lượng giới hạn phải là một số nguyên!';
$_LANG['js_languages']['error_gift_integral'] = 'Present points must be an integer!';
$_LANG['js_languages']['search_is_null'] = 'Did not search any products, please re-search';

/* Delete associates */
$_LANG['js_languages']['batch_drop_confirm'] = 'Are you sure delete the checked associates?';
$_LANG['error_exist_order'] = 'There are orders in the associates, can\'t be deleted!';
$_LANG['batch_drop_success'] = '%s records has be deleted successfully.(You can\'t delete associates with orders)';
$_LANG['no_select_group_buy'] = 'Events do not buy your records!';

/* Log thao tác */
$_LANG['log_action']['group_buy'] = 'Associates product';

?>