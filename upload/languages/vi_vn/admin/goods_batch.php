<?php
$_LANG['select_method'] ='Product method:';
$_LANG['by_cat'] ='Basis product category, brand.';
$_LANG['by_sn'] ='Basis product NO.';
$_LANG['select_cat'] ='Danh mục:';
$_LANG['select_brand'] ='Thương hiệu:';
$_LANG['goods_list'] ='List:';
$_LANG['src_list'] ='Choose product:';
$_LANG['dest_list'] ='Chosen product:';
$_LANG['input_sn'] ='Enter product NO.:<Br/>(One NO. per line)';
$_LANG['edit_method'] ='Method:';
$_LANG['edit_each'] ='One by one';
$_LANG['edit_all'] ='Unify';
$_LANG['go_edit'] ='Đăng nhập';

$_LANG['notice_edit'] = 'Member price -1 express Member price will be calculated in proportion to member discounts grading';

$_LANG['goods_class'] = 'Goods Class';
$_LANG['g_class'][G_REAL] = 'Real Goods';
$_LANG['g_class'][G_CARD] = 'Virtual Card';

$_LANG['goods_sn'] = 'NO';
$_LANG['goods_name'] ='Tên';
$_LANG['market_price'] ='Market price';
$_LANG['shop_price'] ='Shop price';
$_LANG['integral'] = 'Purchase Points';
$_LANG['give_integral'] = 'Free points';
$_LANG['goods_number'] ='Kho hàng';
$_LANG['brand'] ='Thương hiệu';

$_LANG['export_format'] = 'Định dạng dữ liệu';
$_LANG['export_ecshop'] = 'Định dạng dữ liệu ECMS';
$_LANG['export_taobao'] = 'Định dạng Taobao';
$_LANG['export_taobao46'] = 'Định dạng Taobao 4.6';
$_LANG['export_paipai'] = 'Định dạng paipai';
$_LANG['export_paipai3'] = 'Định dạng paipai 3.0';
$_LANG['batch_edit_ok'] ='Chỉnh sửa loạt sản phẩm thành công.';

$_LANG['goods_cat'] ='Danh mục:';
$_LANG['csv_file'] ='Upload tệp csv:';
$_LANG['notice_file'] ='(The product quantity once upload had better be less than 1000 in CSV file, the CSV file size had better be less than 500K.)';
$_LANG['file_charset'] ='Encoding tệp:';
$_LANG['download_file'] ='Download batch CSV files(%s).';
$_LANG['use_help'] ='Help:' .
        '<ol>' .
          '<Li>According to the usage habit, the download corresponds language of csv file, for example Chinese mainland customers download the simplified Chinese character language file, Hongkong and Taiwan customers download the traditional Chinese language file;</li>' .
          '<Li>Fill in the csv file, can use the excel or text editor to open a csv file;<br />' .
              'If "Best product" and so on, fill in numeral 0 or 1, 0 means "NO", 1 mean "YES";<br />' .
              'Please fill in file name with path for product picture and thumbnail, the path is relative path [root directory]/images/, for example, the picture path is [root catalogue]/images/200610/abc.jpg, fill in 200610/abc.jpg;<br />'.
              '<font style="color:#FE596A;">If Taobao Assistant cvs encoding format, make sure the code on the site, such as the code is incorrect, you can use editing software transcoding.</font></li>' .
          '<Li>Upload the product picture and thumbnail to correspond directory, for example:[Root catalogue]/images/200610/;</li>' .
              '<font style="color:#FE596A;">Please upload pictures of goods and commodities csv file and upload the thumbnails, or picture can not be processed.</font></li>' .
          '<Li>Select category and file code to upload, upload the csv file.</li>'.
        '</ol>';

$_LANG['js_languages']['please_select_goods'] ='Please select product.';
$_LANG['js_languages']['please_input_sn'] ='Vui lòng nhập mã sản phẩm.';
$_LANG['js_languages']['goods_cat_not_leaf'] ='Please select bottom class category.';
$_LANG['js_languages']['please_select_cat'] ='Please select belong category.';
$_LANG['js_languages']['please_upload_file'] ='Please upload batch csv files.';

// Batch upload field of product
$_LANG['upload_goods']['goods_name'] ='Tên';
$_LANG['upload_goods']['goods_sn'] ='Mã s.phẩm';
$_LANG['upload_goods']['brand_name'] ='Thương hiệu';   // Need to be convert brand_id
$_LANG['upload_goods']['market_price'] ='Market price';
$_LANG['upload_goods']['shop_price'] ='Shop price';
$_LANG['upload_goods']['integral'] ='Points limit for buying';
$_LANG['upload_goods']['original_img'] ='Original picture';
$_LANG['upload_goods']['goods_img'] ='Picture';
$_LANG['upload_goods']['goods_thumb'] ='Thumbnail';
$_LANG['upload_goods']['keywords'] ='Từ khóa';
$_LANG['upload_goods']['goods_brief'] ='Tóm lược';
$_LANG['upload_goods']['goods_desc'] ='Chi tiết';
$_LANG['upload_goods']['goods_weight'] ='Trọng lượng(kg)';
$_LANG['upload_goods']['goods_number'] ='Hàng trong kho';
$_LANG['upload_goods']['warn_number'] ='S.lượng cảnh báo';
$_LANG['upload_goods']['is_best'] ='Tốt nhất';
$_LANG['upload_goods']['is_new'] ='Mới nhất';
$_LANG['upload_goods']['is_hot'] ='Hot nhất';
$_LANG['upload_goods']['is_on_sale'] ='Đang bán';
$_LANG['upload_goods']['is_alone_sale'] ='Can be a common product sale?';
$_LANG['upload_goods']['is_real'] ='Entity';

$_LANG['batch_upload_ok'] ='Upload một loạt thành công.';
$_LANG['goods_upload_confirm']='Batch upload confirmation.';
?>