<?php

/**
 * ECSHOP Manage a center start page language file
 * ============================================================================
 * All right reserved (C) 2005-2011 Beijing Yi Shang Interactive Technology
 * Development Ltd.
 * Web site: http://www.ecshop.com
 * ----------------------------------------------------------------------------
 * This is a free/open source software；it mean that you can modify, use and
 * republish the program code, on the premise of that your behavior is not for
 * commercial purposes.
 * ============================================================================
 * $Author: liubo $
 * $Id: goods.php 17217 2011-01-19 06:29:08Z liubo $
*/

$_LANG['edit_goods'] ='Sửa';
$_LANG['copy_goods'] ='Copy';
$_LANG['continue_add_goods'] ='Continue add new product';
$_LANG['back_goods_list'] ='Return product list';
$_LANG['add_goods_ok'] ='Add successfully';
$_LANG['edit_goods_ok'] ='Edit successfully';
$_LANG['trash_goods_ok'] ='Move to recycle bin successfully.';
$_LANG['restore_goods_ok'] ='Restore successfully.';
$_LANG['drop_goods_ok'] ='Đã xóa thành công.';
$_LANG['batch_handle_ok']       = 'Batch operation successfully.';
$_LANG['drop_goods_confirm']    = 'Are you sure delete the product?';
$_LANG['batch_drop_confirm']    = 'All related products will be deleted if you thorough delete the pruduct!';
$_LANG['trash_goods_confirm']   = 'Bạn có chắc bạn muốn chuyển sản phẩm này thùng rác?';
$_LANG['batch_trash_confirm']   = 'Bạn có chắc bạn muốn chuyển sản phẩm đã chọn thùng rác?';
$_LANG['trash_product_confirm'] = 'Bạn có chắc bạn muốn xóa vĩnh viễn sản phẩm này?';
$_LANG['restore_goods_confirm'] = 'Bạn có chắc bạn muốn khôi phục sản phẩm này?';
$_LANG['batch_restore_confirm'] = 'Bạn có chắc bạn muốn khôi phục sản phẩm đã chọn?';
$_LANG['batch_on_sale_confirm'] = 'Bạn có chắc bạn muốn đặt on sale sản phẩm đã chọn?';
$_LANG['batch_not_on_sale_confirm'] = 'Bạn có chắc bạn muốn hủy on sale sản phẩm đã chọn?';
$_LANG['batch_best_confirm']    = 'Bạn có chắc bạn muốn đặt sản phẩm đã chọn là tốt nhất?';
$_LANG['batch_not_best_confirm']    = 'Bạn có chắc bạn muốn hủy đặt sản phẩm đã chọn là tốt nhất?';
$_LANG['batch_new_confirm']     = 'Bạn có chắc bạn muốn đặt sản phẩm đã chọn là mới nhất?';
$_LANG['batch_not_new_confirm'] = 'Bạn có chắc bạn muốn hủy đặt sản phẩm đã chọn là mới nhất?';
$_LANG['batch_hot_confirm']     = 'Bạn có chắc bạn muốn đặt sản phẩm đã chọn là hot nhất?';;
$_LANG['batch_not_hot_confirm']='Bạn có chắc bạn muốn hủy đặt sản phẩm đã chọn là hot nhất?';
$_LANG['cannot_found_goods'] = 'Không tìm thấy sản phẩm có yêu cầu này.';
$_LANG['sel_goods_type'] = 'Hãy chọn loại sản phẩm';
$_LANG['sel_goods_suppliers'] = 'Vui lòng chọn nhà cung cấp';

/*------------------------------------------------------ */
//-- The picture processing is related to hint an information
/*------------------------------------------------------ */
$_LANG['no_gd'] ='Your server nonsupport GD or didn\'t install to operate the picture type to expand a database perhaps.';
$_LANG['img_not_exists'] ='Don\'t find out an original picture, create thumbnail failure.';
$_LANG['img_invalid'] ='Create thumbnail failure, because you upload an invalid picture file.';
$_LANG['create_dir_failed'] ='The images file clip and can\'t write, create thumbnail failure.';
$_LANG['safe_mode_warning'] ='Your server circulate under the safe mode, and %s directory nonentity. Your needing probably to establish a directory in advance then can upload a picture.';
$_LANG['not_writable_warning']='The %s directory can\'t be wrote, you need to config the directory as writable then can upload a picture.';

/*------------------------------------------------------ */
//-- Product list
/*------------------------------------------------------ */
$_LANG['goods_cat'] ='Tất cả danh mục';
$_LANG['goods_brand'] ='Tất cả thương hiệu';
$_LANG['intro_type'] ='Tất cả';
$_LANG['keyword'] ='Từ khóa';
$_LANG['is_best'] ='Tốt nhất';
$_LANG['is_new'] ='Mới nhất';
$_LANG['is_hot'] ='Hot nhất';
$_LANG['is_promote'] ='Sales promotion';
$_LANG['all_type'] = 'All recommend';
$_LANG['sort_order'] = 'Recommend to sort';

$_LANG['goods_name'] ='Tên';
$_LANG['goods_sn'] ='NO.';
$_LANG['shop_price'] ='Giá';
$_LANG['is_on_sale'] ='On sale';
$_LANG['goods_number'] ='Kho hàng';

$_LANG['copy'] ='Copy';
$_LANG['item_list'] = 'Item List';

$_LANG['integral'] ='Points limit';
$_LANG['on_sale'] ='On sale';
$_LANG['not_on_sale'] ='Not on sale';
$_LANG['best'] ='Best product';
$_LANG['not_best'] ='Cancel best product';
$_LANG['new'] ='New product';
$_LANG['not_new'] ='Cancel new product';
$_LANG['hot'] ='Hot product';
$_LANG['not_hot'] ='Cancel hot product';
$_LANG['move_to'] ='Move to category';

// ajax
$_LANG['goods_name_null'] ='Please enter product name.';
$_LANG['goods_sn_null'] ='Please enter product NO..';
$_LANG['shop_price_not_number']='Price must be a figure.';
$_LANG['shop_price_invalid'] = 'You have entered an illegal market price.';
$_LANG['goods_sn_exists'] ='The product NO. already exist, please change a number.';

/*------------------------------------------------------ */
//-- Add /edit a product information
/*------------------------------------------------------ */
$_LANG['tab_general'] ='Tóm lược';
$_LANG['tab_detail'] ='Chi tiết';
$_LANG['tab_mix'] ='Others';
$_LANG['tab_properties'] ='Thuộc tính';
$_LANG['tab_gallery'] ='Gallery';
$_LANG['tab_linkgoods'] ='S.phẩm liên quan';
$_LANG['tab_groupgoods'] ='Phụ kiện';
$_LANG['tab_article'] ='Bài viết liên quan';

$_LANG['lab_goods_name'] ='Tên sản phẩm:';
$_LANG['lab_goods_sn'] ='NO.:';
$_LANG['lab_goods_cat'] ='Danh mục:';
$_LANG['lab_other_cat'] ='Mục mở rộng:';
$_LANG['lab_goods_brand'] ='Thương hiệu:';
$_LANG['lab_shop_price'] ='Giá tại shop:';
$_LANG['lab_market_price'] ='Giá t.trường:';
$_LANG['lab_user_price'] ='Giá t.viên:';
$_LANG['lab_promote_price'] ='Giá k.mại:';
$_LANG['lab_promote_date'] ='Ngày k.mại:';
$_LANG['lab_picture'] ='Upload hình:';
$_LANG['lab_thumb'] ='Upload hình nhỏ:';
$_LANG['auto_thumb'] ='Tự động tạo hình thu nhỏ';
$_LANG['lab_keywords'] ='Từ khóa:';
$_LANG['lab_goods_brief'] ='Tóm lược:';
$_LANG['lab_seller_note'] ='Thông báo:';
$_LANG['lab_goods_type'] = 'Loại sản phẩm:';
$_LANG['lab_picture_url'] = 'Merchandise picture external URL';
$_LANG['lab_thumb_url'] = 'External merchandise Thumbnail URL';

$_LANG['lab_goods_weight'] ='Trọng lượng:';
$_LANG['unit_g'] ='Gram';
$_LANG['unit_kg'] ='Kilogram';
$_LANG['lab_goods_number'] ='Số lượng trong kho:';
$_LANG['lab_warn_number'] ='Số lượng cảnh báo:';
$_LANG['lab_integral'] ='Chi trả bằng điểm:';
$_LANG['lab_give_integral'] = 'Consumption presented a few points:';
$_LANG['lab_rank_integral'] = 'Presented a number of grade points:';
$_LANG['lab_intro'] ='Recommend:';
$_LANG['lab_is_on_sale'] ='On sale:';
$_LANG['lab_is_alone_sale'] ='Common product:';
$_LANG['lab_is_free_shipping'] = 'Free shipping：';


$_LANG['compute_by_mp'] ='Tính toán';

$_LANG['notice_goods_sn'] ='Nếu bạn không nhập mã sản phẩm, hệ thống sẽ tự thêm tiền tố No. vào.';
$_LANG['notice_integral'] ='(Đây là bắt buộc) có thể dùng số dư để thanh toán.';
$_LANG['notice_give_integral'] = 'Purchase the merchandise when presented fraction of consumption, express -1 presented by commodity prices';
$_LANG['notice_rank_integral'] = 'Purchase the merchandise when presented fraction grading, express -1 presented by commodity prices';
$_LANG['notice_seller_note'] ='Only provide information for shop owner.';
$_LANG['notice_storage'] = 'Inventories of goods for the virtual goods or commodities when there is non-editable state of goods, inventory value depends on its quantity or volume of goods virtual goods';
$_LANG['notice_keywords'] ='Divided by blank character.';
$_LANG['notice_user_price'] = 'Member price is -1, said member prices Member grade discount rate. You can also specify a hierarchy for each fixed-price';
$_LANG['notice_goods_type'] = 'Please select the type of the goods, then complete the attributes of the goods';

$_LANG['on_sale_desc'] ='Checked means it can be allowed to sale, otherwise can be disallowed to sale.';
$_LANG['alone_sale'] ='Checked means it can be sold as common product, otherwise can be sold as accessories or gifts.';
$_LANG['free_shipping'] = 'Checked means it can shipped free, otherwise as regular.';

$_LANG['invalid_goods_img'] ='Định dạng hình sản phẩm không hợp lệ!';
$_LANG['invalid_goods_thumb']='Định dạng hình thu nhỏ không hợp lệ!';
$_LANG['invalid_img_url'] ='Product gallery the %s picture format inaccuracy!';

$_LANG['goods_img_too_big'] ='Kích cỡ hình sản phẩm quá lớn(tối đa hỗ trợ là: %s), không thể upload.';
$_LANG['goods_thumb_too_big']='Hình thu nhỏ sản phẩm quá lớn(tối đa hỗ trợ là: %s), không thể upload.';
$_LANG['img_url_too_big'] ='Hình ảnh sản phẩm %s trong thư viện có kích cỡ quá lớn(tối đa hỗ trợ là: %s), không thể upload.';

$_LANG['integral_market_price']='Tính giá';
$_LANG['upload_images'] ='Upload hình ảnh';
$_LANG['spec_price'] = 'Giá phụ kiện';
$_LANG['drop_img_confirm'] = 'Bạn có muốn xóa hình này?';

$_LANG['select_font'] = 'Kiểu font';
$_LANG['font_styles'] = array('strong' => 'In đậm', 'em' => 'Nghiêng', 'u' => 'Gạch chân', 'strike' => 'Gạch ngang');

$_LANG['rapid_add_cat'] = 'Thêm danh mục';
$_LANG['rapid_add_brand'] = 'Thêm thương hiệu';
$_LANG['category_manage'] = 'Quản lý danh mục';
$_LANG['brand_manage'] = 'Quản lý thương hiệu';
$_LANG['hide'] = 'Ẩn đi';

$_LANG['lab_volume_price'] = 'Giá mua nhiều:';
$_LANG['volume_number'] = 'số lượng';
$_LANG['volume_price'] = 'giá giảm theo nhóm';
$_LANG['notice_volume_price'] = 'Purchase quantity discount when the total number of preferential prices';
$_LANG['volume_number_continuous'] = 'Repeat quantity discount!';

$_LANG['label_suppliers']          = 'Choice of supplier:';
$_LANG['suppliers_no']             = 'Do not specify a supplier of goods belonging to our';
$_LANG['suppliers_move_to']        = 'Transferred to the supplier';
$_LANG['lab_to_shopex']         = 'Transferred to the Shop';

/*------------------------------------------------------ */
//-- Connection product
/*------------------------------------------------------ */

$_LANG['all_goods'] ='Chọn sản phẩm';
$_LANG['link_goods'] ='S.phẩm liên quan';
$_LANG['single'] ='Single';
$_LANG['double'] ='Double';
$_LANG['all_article'] ='Chọn sản phẩm';
$_LANG['goods_article'] ='Bài viết liên quan';
$_LANG['top_cat'] = 'Là mục gốc';

/*------------------------------------------------------ */
//-- Combine a product
/*------------------------------------------------------ */

$_LANG['group_goods'] ='Phụ kiện';
$_LANG['price'] ='Giá';

/*------------------------------------------------------ */
//-- Product gallery
/*------------------------------------------------------ */

$_LANG['img_desc'] ='Mô tả';
$_LANG['img_url'] ='Upload tệp';
$_LANG['img_file'] = 'or input the url of the image';

/*------------------------------------------------------ */
//-- Connection article
/*------------------------------------------------------ */
$_LANG['article_title'] ='Article title';

$_LANG['goods_not_exist'] = 'The product doesn\'t exist. ';
$_LANG['goods_not_in_recycle_bin'] = 'The product can\'t be deleted until it is removed to recycle bin.';

$_LANG['js_languages']['goods_name_not_null']='Product name can\'t be blank.';
$_LANG['js_languages']['goods_cat_not_null'] ='Please select product category.';
$_LANG['js_languages']['category_cat_not_null'] = 'Category name can not null';
$_LANG['js_languages']['brand_cat_not_null'] = 'Brand name can not null';
$_LANG['js_languages']['goods_cat_not_leaf'] ='You selected product category isn\'t a bottom class category, please select a bottom class category.';
$_LANG['js_languages']['shop_price_not_null']='The shop selling price can\'t be blank.';
$_LANG['js_languages']['shop_price_not_number']='The shop selling price isn\'t a figure.';

$_LANG['js_languages']['select_please'] ='Hãy chọn...';
$_LANG['js_languages']['button_add'] ='Thêm';
$_LANG['js_languages']['button_del'] ='Xóa';
$_LANG['js_languages']['spec_value_not_null'] ='The specification can\'t be blank.';
$_LANG['js_languages']['spec_price_not_number'] ='The price markup isn\'t a fugure.';
$_LANG['js_languages']['market_price_not_number']='The market price isn\'t a figure.';
$_LANG['js_languages']['goods_number_not_int'] ='The product stock isn\'t an integer.';
$_LANG['js_languages']['warn_number_not_int'] ='The stock warning isn\'t an integer.';
$_LANG['js_languages']['promote_not_lt'] = 'Sales start date can not be greater than the end date';
$_LANG['js_languages']['promote_start_not_null'] = 'Promotions start time should not be empty';
$_LANG['js_languages']['promote_end_not_null'] = 'Ending time promotions should not be empty';

$_LANG['js_languages']['drop_img_confirm'] = 'Bạn có muốn xóa hình này?';
$_LANG['js_languages']['batch_no_on_sale'] = 'Are you sure stop sale the checked product?';
$_LANG['js_languages']['batch_trash_confirm'] = 'Are you sure move the checked product to recycle bin?';
$_LANG['js_languages']['go_category_page'] = "This page's data will lost, are you sure to go to adding category page？";
$_LANG['js_languages']['go_brand_page'] = "This page's data will lost, are you sure to go to adding brand page？";

$_LANG['js_languages']['volume_num_not_null'] = 'Please enter a quantity discount';
$_LANG['js_languages']['volume_num_not_number'] = 'Quantity discount is not a figure';
$_LANG['js_languages']['volume_price_not_null'] = 'Please enter at preferential prices';
$_LANG['js_languages']['volume_price_not_number'] = 'Discounted prices not figure';

$_LANG['js_languages']['cancel_color'] = 'no font';

/* 虚拟卡 */
$_LANG['card'] = 'See the virtual card information';
$_LANG['replenish'] = 'Replenishment';
$_LANG['batch_card_add'] = 'Batch Replenishment';
$_LANG['add_replenish'] = 'Add virtual Kaka Micronesia';

$_LANG['goods_number_error'] = 'Merchandise inventory quantity errors';

/*------------------------------------------------------ */
//-- 货品
/*------------------------------------------------------ */
$_LANG['product'] = 'Goods';
$_LANG['product_info'] = 'Item Information';
$_LANG['specifications'] = 'Specifications';
$_LANG['total'] = 'Tổng cộng:';
$_LANG['add_products'] = 'Add Item';
$_LANG['save_products'] = 'Save the success of goods';
$_LANG['product_id_null'] = 'Goods id is empty';
$_LANG['cannot_found_products'] = 'Specified items not found';
$_LANG['product_batch_del_success'] = 'Remove the success of bulk goods';
$_LANG['product_batch_del_failure'] = 'Goods bulk delete failed';
$_LANG['batch_product_add'] = 'Bulk Add';
$_LANG['batch_product_edit'] = 'Batch Edit';
$_LANG['products_title'] = 'Product Name:%s';
$_LANG['products_title_2'] = 'Item:%s';
$_LANG['good_shop_price'] = '(Price:%d)';
$_LANG['good_goods_sn'] = '(Product Code:%s)';
$_LANG['exist_same_goods_sn'] = 'Item No. Item and products are not allowed to repeat';
$_LANG['exist_same_product_sn'] = 'No duplication of goods';
$_LANG['cannot_add_products'] = 'Add a failure of goods';
$_LANG['exist_same_goods_attr'] = 'Item Specifications Property repeat';
$_LANG['cannot_goods_number'] = 'Item Specifications Property repeat';
$_LANG['not_exist_goods_attr'] = 'This product does not exist specifications, please add the size of their';
$_LANG['goods_sn_exists'] = 'The goods_sn you entered already exists';

?>