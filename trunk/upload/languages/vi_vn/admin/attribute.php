<?php
/**
 * ECSHOP
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
 * $Id: attribute.php 17217 2011-01-19 06:29:08Z liubo $
*/

/* List */
$_LANG['by_goods_type'] = 'Display by product type:';
$_LANG['all_goods_type'] = 'All products type';

$_LANG['attr_id'] = 'ID';
$_LANG['cat_id'] = 'Product type';
$_LANG['attr_name'] = 'Tên thuộc tính';
$_LANG['attr_input_type'] = 'Chế độ nhập';
$_LANG['attr_values'] = 'Chọn danh sách giá trị';
$_LANG['attr_type'] = 'Whether need select the value of attribute for shopping?';

$_LANG['value_attr_input_type'][ATTR_TEXT] = 'Nhập thủ công';
$_LANG['value_attr_input_type'][ATTR_OPTIONAL] = 'Chọn từ danh sách';
$_LANG['value_attr_input_type'][ATTR_TEXTAREA] = 'Đoạn văn bản';

$_LANG['drop_confirm'] = 'Bạn có chắc bạn muốn xóa thuộc tính?';

/* Add/Edit */
$_LANG['label_attr_name'] = 'Tên thuộc tính:';
$_LANG['label_cat_id'] = 'Danh mục:';
$_LANG['label_attr_index'] = 'Index:';
$_LANG['label_is_linked'] = 'Chọn sản phẩm liên quan có cùng thuộc tính?';
$_LANG['no_index'] = 'Không index';
$_LANG['keywords_index'] = 'Index từ khóa';
$_LANG['range_index'] = 'Index dải hạn';
$_LANG['note_attr_index'] = 'Nếu bạn không muốn sử dụng trong tìm kiếm chọn "Không index", nếu bạn muốn tìm kiếm thông qua thuộc tính này chọn "Index từ khóa", nếu bạn muốn chọn tìm kiếm theo dải thuộc tính trong select box hoặc check box chọn "Index dải hạn".';
$_LANG['label_attr_input_type'] = 'Chế độ nhập thuộc tính:';
$_LANG['text'] = 'Nhập thủ công';
$_LANG['select'] = 'Chọn từ bên dưới(mỗi dòng 1 giá trị)';
$_LANG['text_area'] = 'Phần văn bản nhiều dòng';
$_LANG['label_attr_values'] = 'Chọn danh sách:';
$_LANG['label_attr_group'] = 'Nhóm thuộc tính:';
$_LANG['label_attr_type'] = 'Thuộc tính tùy chọn';
$_LANG['note_attr_type'] = 'Select "Yes" when the merchandise can set up a number of property value, while property values specified for different different price increases, users need to purchase merchandise at selected specific property value. Choose "No" when the property value of the merchandise can only set a value, the user can only view the value.';
$_LANG['attr_type_values'][0] = 'The only property';
$_LANG['attr_type_values'][1] = 'Radio property';
$_LANG['attr_type_values'][2] = 'Check property';


$_LANG['add_next'] = 'Tiếp tục thêm thuộc tính';
$_LANG['back_list'] = 'Trở về danh sách thuộc tính';

$_LANG['add_ok'] = 'Add attribute [%s] successfully.';
$_LANG['edit_ok'] = 'Edit attribute [%s] successfully.';

/* Prompting message */
$_LANG['name_exist'] = 'The attribute name already exists, please change another one.';
$_LANG['drop_confirm'] = 'Are you sure delete the attribute?';
$_LANG['notice_drop_confirm'] = 'Already has %s the use of the property of merchandise, you sure you want to delete the right property?';
$_LANG['name_not_null'] = 'Tên thuộc tính không được để trống.';

$_LANG['no_select_arrt'] = 'You have no choice need to remove the attribute name.';
$_LANG['drop_ok'] = 'Delete %d products attribute successfully.';

$_LANG['js_languages']['name_not_null'] = 'Please enter attribute name.';
$_LANG['js_languages']['values_not_null'] = 'Please enter the attribute\'s value.';
$_LANG['js_languages']['cat_id_not_null'] = 'Please select the attribute of product type.';

?>