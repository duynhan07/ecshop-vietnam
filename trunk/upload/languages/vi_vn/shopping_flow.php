<?php

/**
 * ECSHOP Flow related to language file
 * ============================================================================
 * All right reserved (C) 2005-2011 Beijing Yi Shang Interactive Technology
 * Development Ltd.
 * Web site: http://www.ecshop.com
 * ----------------------------------------------------------------------------
 * This is a free/open source software；it means that you can modify, use and
 * republish the program code, on the premise of that your behavior is not for
 * commercial purposes.
 * ============================================================================
 * $Author: liubo $
 * $Id: shopping_flow.php 17217 2011-01-19 06:29:08Z liubo $
*/

$_LANG['flow_login_register']['username_not_null'] = 'Please enter username.';
$_LANG['flow_login_register']['username_invalid'] = 'Please enter a valid username.';
$_LANG['flow_login_register']['password_not_null'] = 'Please enter password.';
$_LANG['flow_login_register']['email_not_null'] = 'Please enter email address.';
$_LANG['flow_login_register']['email_invalid'] = 'Please enter a valid email address.';
$_LANG['flow_login_register']['password_not_same'] = 'Re-enter password.';
$_LANG['flow_login_register']['password_lt_six'] = 'Please enter password more than six charactor.';

$_LANG['regist_success'] = "Congratulations! %s register successfully!";
$_LANG['login_success'] = 'Congratulations! Login successfully!';

/* 购物车 */
$_LANG['update_cart'] = 'Cập nhật';
$_LANG['back_to_cart'] = 'Về giỏ hàng';
$_LANG['update_cart_notice'] = 'Cập nhật thành công, vui lòng chọn sản phẩm.';
$_LANG['direct_shopping'] = 'Tôi không muốn đăng nhập, thanh toán trực tiếp.';
$_LANG['goods_not_exists'] = 'Xin lỗi, sản phẩm này không tồn tại.';
$_LANG['drop_goods_confirm'] = 'Bạn có chắc bạn muốn xóa sản phẩm ra khỏi giỏ hàng?';
$_LANG['goods_number_not_int'] = 'Vui lòng nhập đúng số lượng sản phẩm.';
$_LANG['stock_insufficiency'] = 'Sorry, the stocks of products %s only %d, you can buy %d largest.';
$_LANG['package_stock_insufficiency'] = 'Sorry, the stocks of packages is not enough, please reduce the number of the package or inform of the seller.';
$_LANG['shopping_flow'] = 'Giỏ hàng';
$_LANG['username_exists'] = 'Tên tài khoản này đã có trong hệ thống, vui lòng chọn tên khác.';
$_LANG['email_exists'] = 'Địa chỉ email này đã có trong hệ thống, vui lòng nhập email khác.';
$_LANG['surplus_not_enough'] = 'Số dư tài khoản của bạn không đủ.';
$_LANG['integral_not_enough'] = 'Bạn không có đủ điểm.';
$_LANG['integral_too_much'] = "Số điểm mà bạn sử dụng không được vượt quá %d.";
$_LANG['invalid_bonus'] = "he bonus is nonexistent.";
$_LANG['no_goods_in_cart'] = 'Không có sản phẩm nào trong giỏ hàng!';
$_LANG['not_submit_order'] = 'The order of associates have submitted, please don\'t do it again!';
$_LANG['pay_success'] = 'Đã thanh toán thành công, chúng tôi sẽ sắp xếp để gửi hàng cho bạn sớm nhất có thể.';
$_LANG['pay_fail'] = 'Paid failed, please contact with us timely.';
$_LANG['pay_disabled'] = 'The payment mode have disconnected.';
$_LANG['pay_invalid'] = 'The payment mode is invalid. Please contact with us timely.';
$_LANG['flow_no_shipping'] = 'Hãy chọn hình thức vận chuyển.';
$_LANG['flow_no_payment'] = 'Vui lòng chọn hình thức thanh toán!';
$_LANG['pay_not_exist'] = 'Hình thức thanh toán này không tồn tại.';
$_LANG['storage_short'] = 'Hết hàng';
$_LANG['subtotal'] = 'Tổng giá trị';
$_LANG['accessories'] = 'Phụ kiện';
$_LANG['largess'] = 'Largess';
$_LANG['shopping_money'] = 'Tổng cộng %s';
$_LANG['than_market_price'] = 'giá thị trường là %s, bạn tiết kiệm được %s (%s). ';
$_LANG['your_discount'] = 'Your discount is %s';
$_LANG['no'] = 'Không';
$_LANG['not_support_virtual_goods'] = 'Có sản phẩm ảo trong giỏ hàng, sản phẩm này không hỗ trợ thanh toán khi bạn chưa đăng nhập, vui lòng đăng nhập.';
$_LANG['not_support_insure'] = 'No support insure.';
$_LANG['clear_cart'] = 'Xóa giỏ hàng.';
$_LANG['drop_to_collect'] = 'Hủy yêu thích.';
$_LANG['password_js']['show_div_text'] = 'Vui lòng cập nhật giỏ hàng';
$_LANG['password_js']['show_div_exit'] = 'Đóng lại';
$_LANG['goods_fittings'] = 'Goods Fittings';
$_LANG['parent_name'] = 'Goods Releate:';
$_LANG['remark_package'] = 'Preferential Packeage';

/* 优惠活动 */
$_LANG['favourable_name'] = 'Favourable name:';
$_LANG['favourable_period'] = 'Favourable period:';
$_LANG['favourable_range'] = 'Favourable range:';
$_LANG['far_ext'][FAR_ALL] = 'Tất cả sản phẩm';
$_LANG['far_ext'][FAR_BRAND] = 'Following brand';
$_LANG['far_ext'][FAR_CATEGORY] = 'Following category';
$_LANG['far_ext'][FAR_GOODS] = 'Following goods';
$_LANG['favourable_amount'] = 'Favourable amount:';
$_LANG['favourable_type'] = 'Favourable type:';
$_LANG['fat_ext'][FAT_DISCOUNT] = 'Enjoy %d%% discount';
$_LANG['fat_ext'][FAT_GOODS] = 'Select %d from the following gifts (0 indicates no limitation to quantity)';
$_LANG['fat_ext'][FAT_PRICE] = 'Price reduced by %d';

$_LANG['favourable_not_exist'] = 'Favourable is nonexistence';
$_LANG['favourable_not_available'] = 'Favourable is nonexistence';
$_LANG['favourable_used'] = 'Favourable is used';
$_LANG['pls_select_gift'] = 'Please select gift';
$_LANG['gift_count_exceed'] = 'Gift quantity selected is maximizing';
$_LANG['gift_in_cart'] = 'Gift in the cart: %s';
$_LANG['label_favourable'] = 'Favourable';
$_LANG['label_collection'] = 'Collection';
$_LANG['collect_to_flow'] = 'Buy';

/* 登录注册 */
$_LANG['forthwith_login'] = 'Login';
$_LANG['forthwith_register'] = 'Register';
$_LANG['signin_failed'] = 'Soory, login failure, please check your username and password.';
$_LANG['gift_remainder'] = 'Note: please select gift again after login or registering.';

/* 收货人信息 */
$_LANG['flow_js']['consignee_not_null'] = 'Please enter name of consignee!';
$_LANG['flow_js']['country_not_null'] = 'Please select a country of consignee!';
$_LANG['flow_js']['province_not_null'] = 'Please select a province of consignee!';
$_LANG['flow_js']['city_not_null'] = 'Please select a city of consignee!';
$_LANG['flow_js']['district_not_null'] = 'Please select a district of consignee!';
$_LANG['flow_js']['invalid_email'] = 'Please enter a valid email address.';
$_LANG['flow_js']['address_not_null'] = 'Please enter an address!';
$_LANG['flow_js']['tele_not_null'] = 'Please enter a phone number!';
$_LANG['flow_js']['shipping_not_null'] = 'Please select a shipping method!';
$_LANG['flow_js']['payment_not_null'] = 'Vui lòng chọn hình thức thanh toán!';
$_LANG['flow_js']['goodsattr_style'] = 1;
$_LANG['flow_js']['tele_invaild'] = 'Please enter valid phone No.';
$_LANG['flow_js']['zip_not_num'] = 'Zip code should be numbers';
$_LANG['flow_js']['mobile_invaild'] = 'Mobile No. is invalid';

$_LANG['new_consignee_address'] = 'New consignee address';
$_LANG['consignee_address'] = 'Địa chỉ';
$_LANG['consignee_name'] = 'Name';
$_LANG['country_province'] = 'Country/Province';
$_LANG['please_select'] = 'Hãy chọn...';
$_LANG['city_district'] = 'City/District';
$_LANG['email_address'] = 'Email';
$_LANG['detailed_address'] = 'Địa chỉ';
$_LANG['postalcode'] = 'Postalcode';
$_LANG['phone'] = 'Phone';
$_LANG['mobile'] = 'Mobile';
$_LANG['backup_phone'] = 'Mobile';
$_LANG['sign_building'] = 'Sign building';
$_LANG['deliver_goods_time'] = 'Thời gian v.chuyển tối ưu';
$_LANG['default'] = 'Default';
$_LANG['default_address'] = 'Default address';
$_LANG['confirm_submit'] = 'Submit';
$_LANG['confirm_edit'] = 'Submit';
$_LANG['country'] = 'Country';
$_LANG['province'] = 'Province';
$_LANG['city'] = 'City';
$_LANG['area'] = 'Area';
$_LANG['consignee_add'] = 'Add a new consignee.';
$_LANG['shipping_address'] = 'Chuyển tới địa chỉ này';
$_LANG['address_amount'] = 'The place of receipt should be less than three.';
$_LANG['not_fount_consignee'] = 'Sorry, the place of receipt is nonexistence.';

/*------------------------------------------------------ */
//-- 订单提交
/*------------------------------------------------------ */

$_LANG['goods_amount_not_enough'] = 'Goods amount is less than the minimum amount %s required, order cannot be submited.';
$_LANG['balance_not_enough'] = 'Your balance is not enough, please select another paymen mode';
$_LANG['select_shipping'] = 'Hình thức vận chuyển là';
$_LANG['select_payment'] = 'Hình thức thanh toán là';
$_LANG['order_amount'] = 'Số tiền thanh toán là';
$_LANG['remember_order_number'] = 'Cảm ơn bạn đã mua hàng, đơn hàng của bạn đã được gửi đi, vui lòng ghi nhớ mã đơn hàng của bạn.';
$_LANG['back_home'] = '<a href="index.php">Về trang chủ</a>';
$_LANG['goto_user_center'] = '<a href="user.php">Trung tâm thành viên</a>';
$_LANG['order_submit_back'] = 'Bạn có thể %s hoặc đi tới %s';

$_LANG['order_placed_sms'] = "Ban co don hang moi. Nguoi nhan:%s Dien thoai:%s";
$_LANG['sms_paid'] = 'Da thanh toan';

$_LANG['notice_gb_order_amount'] = '（(Remarks: If associates with insurance, the insurance and corresponding pay need to be paid in first payment.)';

$_LANG['pay_order'] = 'Pay order %s';
$_LANG['validate_bonus'] = 'Vadidate bonus';
$_LANG['input_bonus_no'] = 'Input bonus No.';
$_LANG['select_bonus'] = 'Select existing bonus';
$_LANG['bonus_sn_error'] = 'Please enter valid bonus No.';
$_LANG['bonus_min_amount_error'] = 'Order amount is less than the minimum amount of bonus %s';
$_LANG['bonus_is_ok'] = 'Bonus No. is avaible, can be used as %s';


$_LANG['shopping_myship'] = 'My shipping';
$_LANG['shopping_activity'] = 'Activity list';
$_LANG['shopping_package'] = 'Package list';
?>
