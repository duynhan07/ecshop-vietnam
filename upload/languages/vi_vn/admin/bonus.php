<?php

/**
 * ECSHOP Bonus type/Bonus management program
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
 * $Id: bonus.php 17217 2011-01-19 06:29:08Z liubo $
*/
/* Bonus type feild information */
$_LANG['bonus_type'] = 'Bonus Type';
$_LANG['bonus_list'] = 'Bonus List';
$_LANG['type_name'] = 'Tên';
$_LANG['type_money'] = 'Số tiền tặng';
$_LANG['min_goods_amount'] = 'Minimum orders amount';
$_LANG['notice_min_goods_amount'] = 'Only the total amount of merchandise to achieve this the number of orders to use such red packets';
$_LANG['min_amount'] = 'Tối thiểu';
$_LANG['max_amount'] = 'Tối đa';
$_LANG['send_startdate'] = 'Bắt đầu lúc';
$_LANG['send_enddate'] = 'Hạn chót';

$_LANG['use_startdate'] = 'Bắt đầu lúc';
$_LANG['use_enddate'] = 'Hạn chót';
$_LANG['send_count'] = 'Số lượng đã gửi';
$_LANG['use_count'] = 'Số lượng dùng';
$_LANG['send_method'] = 'Hình thức tặng';
$_LANG['send_type'] = 'Loại';
$_LANG['param'] = 'Tham số';
$_LANG['no_use'] = 'Chưa dùng';
$_LANG['yuan'] = 'vnđ';
$_LANG['user_list'] = 'Member list';
$_LANG['type_name_empty'] = 'Bonus type name can\'t be blank!';
$_LANG['type_money_empty'] = 'Số tiền tặng không được để trống!';
$_LANG['min_amount_empty'] = 'Min limit of order of bonus type can\'t be blank!';
$_LANG['max_amount_empty'] = 'Max limit of order of bonus type can\'t be blank!';
$_LANG['send_count_empty'] = 'Quantity of bonus type can\'t be blank!';

$_LANG['send_by'][SEND_BY_USER] = 'Tặng theo người dùng';
$_LANG['send_by'][SEND_BY_GOODS] = 'Tặng theo sản phẩm';
$_LANG['send_by'][SEND_BY_ORDER] = 'Tặng theo đơn hàng';
$_LANG['send_by'][SEND_BY_PRINT] = 'Tạo mã quà';
$_LANG['report_form'] = 'Báo cáo';
$_LANG['send'] = 'Gửi';
$_LANG['bonus_excel_file'] = 'Danh sách thông tin quà tặng';

$_LANG['goods_cat'] = 'Danh mục';
$_LANG['goods_brand'] = 'Thương hiệu';
$_LANG['goods_key'] = 'Từ khóa';
$_LANG['all_goods'] = 'Optional product';
$_LANG['send_bouns_goods'] = 'Provide the type bonus product';
$_LANG['remove_bouns'] = 'Remove bonus';
$_LANG['all_remove_bouns'] = 'All remove';
$_LANG['goods_already_bouns'] = 'The product has provided for other type bonus!';
$_LANG['send_user_empty']='You have no select member whom needs to issue bonus, please return!';
$_LANG['batch_drop_success'] = ' %d bonuses has be deleted.';
$_LANG['sendbonus_count'] = 'Total provide %d bonuses.';
$_LANG['send_bouns_error'] ='Send out member bonus inaccurate, please try it again!';
$_LANG['no_select_bonus'] = 'You have no choice need to remove users bonus.';
$_LANG['bonustype_edit'] = 'Edit bonus type';
$_LANG['bonustype_view'] = 'View details';
$_LANG['drop_bonus'] = 'Xóa';
$_LANG['send_bonus'] = 'Provide';
$_LANG['continus_add'] = 'Continue add bonus type.';
$_LANG['back_list'] = 'Return to bonus type list.';
$_LANG['continue_add'] = 'Continue to add bonus.';
$_LANG['back_bonus_list'] = 'Return to bonus list';
$_LANG['validated_email'] = 'Only to authenticated users through the mail issuance of red packets';

/* Prompting message */
$_LANG['attradd_succed'] = 'Operation successfully!';
$_LANG['js_languages']['type_name_empty'] = 'Please enter bonus type name!';
$_LANG['js_languages']['type_money_empty'] = 'Please enter bonus type price!';
$_LANG['js_languages']['order_money_empty'] = 'Please enter order money!';
$_LANG['js_languages']['type_money_isnumber'] = 'Type money must be number format!';
$_LANG['js_languages']['order_money_isnumber'] = 'Order money must be number format!';
$_LANG['js_languages']['bonus_sn_empty'] = 'Please enter bonus NO.!';
$_LANG['js_languages']['bonus_sn_number'] = 'Bonus\'s NO. must be a figure!';
$_LANG['send_count_error'] = 'The provide bonus quantiyt must be an integer!';
$_LANG['js_languages']['bonus_sum_empty'] = 'Please enter bonus quantity you want to provide!';
$_LANG['js_languages']['bonus_sum_number'] = 'Provide bonus quantity must be an integer!';
$_LANG['js_languages']['bonus_type_empty'] = 'Please select bonus type money!';
$_LANG['js_languages']['user_rank_empty'] = 'Please appoint member rank!';
$_LANG['js_languages']['user_name_empty'] = 'Please select a member at least!';
$_LANG['js_languages']['invalid_min_amount'] = 'Please enter a minimum level of orders (the figure is greater than 0)';
$_LANG['js_languages']['send_start_lt_end'] = 'bonus release date can not be greater than the beginning date of the end';
$_LANG['js_languages']['use_start_lt_end'] = 'bonus use date can not be greater than the beginning date of the end';

$_LANG['order_money_notic'] = 'As long as the amount of the value of orders will be issued red packets to the user';
$_LANG['type_money_notic'] = 'The type bonus can offset money';
$_LANG['send_startdate_notic'] = 'The type bonus can be provided only current time between start time and deadline.';
$_LANG['use_startdate_notic'] = 'Only the current time between the start date and the time between the closing date, this type of red packets can only be used';
$_LANG['type_name_exist'] = 'The type name already exists.';
$_LANG['type_money_error'] = 'The money must be a figure and can\'t less than 0!';
$_LANG['bonus_sn_notic'] = 'TIP: Bonus NO. is composed of 6 bits serial number seed and 4 bits stochastic numbers.';
$_LANG['creat_bonus'] = 'Created';
$_LANG['creat_bonus_num'] = 'Bonus NO.';
$_LANG['bonus_sn_error'] = 'Bonus NO. must be a figure!';
$_LANG['send_user_notice'] = 'Vui lòng nhập tên tài khoản khi bạn tặng quà cho người dùng , phân tách tên tài khoản bằng dấu (,) <br /> ví dụ:liry, wjz, zwj';

/* Bonus information field */
$_LANG['bonus_id'] = 'ID';
$_LANG['bonus_type_id'] = 'Type money';
$_LANG['send_bonus_count'] = 'Bonus quantity';
$_LANG['start_bonus_sn'] = 'Start NO.';
$_LANG['bonus_sn'] = 'Bonus NO.';
$_LANG['user_id'] = 'User';
$_LANG['used_time'] = 'Thời gian';
$_LANG['order_id'] = 'Mã đ.hàng';
$_LANG['send_mail'] = 'Send mail';
$_LANG['emailed'] = 'Email notice';
$_LANG['mail_status'][BONUS_NOT_MAIL] = 'Not send';
$_LANG['mail_status'][BONUS_MAIL_FAIL] = 'Send mail has failed.';
$_LANG['mail_status'][BONUS_MAIL_SUCCEED] = 'Send mail has successfully.';

$_LANG['sendtouser'] = 'Provide bonus for appointed user';
$_LANG['senduserrank'] = 'Provide bonus by user rank ';
$_LANG['userrank'] = 'User rank';
$_LANG['select_rank'] = 'All users...';
$_LANG['keywords'] ='Keywords: ';
$_LANG['userlist'] ='User list: ';
$_LANG['search_users'] ='Search user';
$_LANG['confirm_send_bonus'] ='Submit';
$_LANG['bonus_not_exist'] = 'Quà tặng này không tồn tại.';
$_LANG['success_send_mail'] = 'Send %d mails successfully.';
$_LANG['send_continue'] = 'Continue to send bonus.';
$_LANG['send_to_user'] = 'Disseminate the red envelope to the following users.';