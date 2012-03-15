<?php
/* Commodity category field information */
$_LANG['cat_id'] = 'ID';
$_LANG['cat_name'] = 'Tên';
$_LANG['isleaf'] = 'Không cho phép';
$_LANG['noleaf'] = 'Cho phép';
$_LANG['keywords'] = 'Từ khóa';
$_LANG['cat_desc'] = 'Mô tả';
$_LANG['parent_id'] = 'Parent';
$_LANG['sort_order'] = 'Thứ tự';
$_LANG['measure_unit'] = 'Đơn vị tính';
$_LANG['delete_info'] = 'Xóa đã chọn';
$_LANG['category_edit'] = 'Edit category';
$_LANG['move_goods'] = 'Chuyển s.phẩm';
$_LANG['cat_top'] = 'Root';
$_LANG['show_in_nav'] = 'Cho vào NAV';
$_LANG['show_in_nav_x'] = 'Hiển thị tại NAV';
$_LANG['cat_style'] = 'Tệp css riêng biệt';
$_LANG['is_show'] = 'Hiển thị?';
$_LANG['show_in_index'] = 'Hiển thị trên index?';
$_LANG['notice_show_in_index'] = 'This setting can be the latest in the home, hot, Department recommend that the classification of merchandise under Recommend';
$_LANG['goods_number'] = 'Số s.phẩm';
$_LANG['grade'] = 'Dải giá sản phẩm';
$_LANG['notice_grade'] = 'This option indicates that the classification of merchandise under the lowest and the highest price level of the division between the number of express no grading fill 0';
$_LANG['short_grade'] = 'Price classification';

$_LANG['nav'] = 'Cho vào NAV';
$_LANG['nav_x'] = 'Hiển thị NAV';
$_LANG['index_new'] = 'Mới nhất';
$_LANG['index_best'] = 'Tốt nhất';
$_LANG['index_hot'] = 'Hot nhất';

$_LANG['back_list'] = 'Trở về danh sách danh mục.';
$_LANG['continue_add'] = 'Continue add category.';

$_LANG['notice_style'] = 'You can for each classification of merchandise to specify a style sheet document. For example, documents stored in the themes directory then enter:themes/style.css';

/* Prompting message */
$_LANG['catname_empty'] = 'Vui lòng nhập tên danh mục!';
$_LANG['catname_exist'] = 'The category name already exists.';
$_LANG["parent_isleaf"] = 'The category can\'t be the bottom class category!';
$_LANG["cat_isleaf"] = 'The category can\'t be deleted, because it isn\'t the bottom class category or some product already exists.';
$_LANG["cat_noleaf"] ='There are still subcategories, so you can\'t modify category for the bottom class!';
$_LANG["is_leaf_error"] ='The selected higher category can\'t be lower category of current category!';
$_LANG['grade_error'] = 'Quantity price classification can only be an integer within 0-10';

$_LANG['catadd_succed'] = 'Add new category successfully!';
$_LANG['catedit_succed'] = 'Edit category successfully!';
$_LANG['catdrop_succed'] = 'Delete category successfully!';
$_LANG['catremove_succed'] = 'Move category successfully!';
$_LANG['move_cat_success'] = 'Move category has finished!';

$_LANG['cat_move_desc'] = 'Di chuyển danh mục nghĩa là gì?';
$_LANG['select_source_cat'] = 'Please select category that you want to move.';
$_LANG['select_target_cat'] = 'Please select category that the target.';
$_LANG['source_cat'] = 'Từ danh mục';
$_LANG['target_cat'] = 'chuyển tới';
$_LANG['start_move_cat'] = 'Gửi đi';
$_LANG['cat_move_notic'] = 'In add product or pruduct management, if you want to change products category, you can manage the products category by the function.';

$_LANG['cat_move_empty'] = 'Vui lòng chọn danh mục!';

$_LANG['sel_goods_type'] = 'Hãy chọn loại sản phẩm';
$_LANG['sel_filter_attr'] = 'Hãy chọn loại thuộc tính';
$_LANG['filter_attr'] = 'Bộ lọc thuộc tính';
$_LANG['filter_attr_notic'] = 'Filter property page to the previous classification of merchandise selection';
$_LANG['filter_attr_not_repeated'] = 'Filter property can`t be repeated';

/*JS language item*/
$_LANG['js_languages']['catname_empty'] = 'Category name không được để trống!';
$_LANG['js_languages']['unit_empyt'] = 'Unit of quantity không được để trống!';
$_LANG['js_languages']['is_leafcat'] ="You selected category is a bottom class category. \\nThe higher category of new category can\'t be a bottom class category.";
$_LANG['js_languages']['not_leafcat'] =" You selected category isn\'t a bottom class category. \\nThe category of product transfer can just be operated between the bottom class categories.";
$_LANG['js_languages']['filter_attr_not_repeated'] = 'Filter property can`t be repeated';
$_LANG['js_languages']['filter_attr_not_selected'] = 'Please select a filter property';

?>