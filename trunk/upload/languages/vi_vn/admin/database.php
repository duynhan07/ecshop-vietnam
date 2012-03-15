<?php
$_LANG['db_manage'] ='Quản lý dữ liệu';
$_LANG['start_backup'] ='Bắt đầu sao lưu';
$_LANG['backup_name'] ='Tên tệp';
$_LANG['backup_time'] ='Thời gian';
$_LANG['backup_size'] ='Kích cỡ';
$_LANG['restore'] ='Khôi phục tệp tin';
$_LANG['restore_ok'] ='Đã khôi phục thành công.';
$_LANG['download'] ='Tải về';
$_LANG['restored'] ='Tệp sao lưu này đã được dùng khôi phục rồi.';
$_LANG['upload_sql'] ='Upload tệp sao lưu';

$_LANG['table'] ='Bảng dữ liệu';
$_LANG['type'] ='Kiểu';
$_LANG['rec_num'] ='Số lượng bản ghi';
$_LANG['rec_size'] ='Kích cỡ';
$_LANG['rec_chip'] ='Phân mảnh';
$_LANG['start_optimize'] ='Tối ưu hóa.';
$_LANG['chip_count'] ='Tổng số lượng phân mảnh';
$_LANG['charset'] ='Kiểu encoding';
$_LANG['status'] ='Trạng thái';

$_LANG['backup_type'] ='Kiểu sao lưu dữ liệu';
$_LANG['full_backup'] ='Sao lưu toàn bộ';
$_LANG['full_backup_note'] ='Sao lưu tất cả các bảng';
$_LANG['stand_backup'] ='Sao lưu chuẩn(nên dùng)';
$_LANG['stand_backup_note'] ='Sao lưu bảng dữ liệu thường dùng';
$_LANG['min_backup'] ='Sao lưu cơ bản';
$_LANG['min_backup_note'] ='Chỉ sao lưu bảng thông tin sản phẩm, đơn hàng, thông tin khách hàng.';
$_LANG['custom_backup'] ='Sao lưu tùy chọn';
$_LANG['custom_backup_note'] ='Sao lưu dữ liệu dựa theo tùy chọn mà tôi thiết lập.';

$_LANG['option'] ='Tùy chọn khác';
$_LANG['ext_insert'] ='Sử dụng chế độ chèn mở rộng (Extended Insert).';
$_LANG['is_pack'] ='Nén giữ liệu sao lưu?';
$_LANG['notice_is_pack'] ='Pack can minish the backup size, but you have to decompress the backup before upload when restoring.';
$_LANG['vol_size'] ='Back phân tệp - Kích cỡ giới hạn(kb).';
$_LANG['sql_name'] ='Tệp sao lưu';
$_LANG['backup_failure'] ='Sao lưu dữ liệu không thành công';

$_LANG['sqlfile'] ='Tệp sql nội bộ';
$_LANG['update_table_pre'] ='Đổi tiền tố bảng';
$_LANG['old_table_pre'] ='At first table prefixion';
$_LANG['new_table_pre'] ='New table prefixion';
$_LANG['use_new_pre'] ='Use the new table prefixion.';
$_LANG['notice_use_new_pre'] ='Only just can choose while recover all backups "Yes", otherwise it will can\'t be used that the table without backup  .<Br/>you can also modify data/config.php in the $prefix to decide to use prefixion.';
$_LANG['upload_and_exe'] = 'Upload tệp sao lưu và thực thi.';

/* Prompting message */
$_LANG['fail_get_tables'] ='Obtain the backup datasheet failure.';
$_LANG['fail_open_file'] ='Mở tệp tin thất bại.';
$_LANG['fail_remove'] ='Không thể xóa tệp tin.';
$_LANG['fail_get_content'] ='Obtain the datasheet contents failure.';
$_LANG['fail_upload'] ='Upload tệp tin không thành công.';
$_LANG['fail_upload_move'] ='Di chuyển tệp tin upload không thành công.';
$_LANG['unrecognize_version'] ='Can\'t identify the ECShop version of the backup sql.';
$_LANG['unrecognize_mysql_version'] ='Can\'t identify the mysql version of the backup sql.';
$_LANG['mysql_version_error'] ='Current mysql version the %s and the mysql version of the backup data the %s is different, may appear a problem, are you sure import it?';
$_LANG['confirm_ver'] = 'Đồng ý, hãy import tệp này!';
$_LANG['unconfirm_ver'] = 'Hủy bỏ!';
$_LANG['version_error'] ='ECShop current version the %s and the backup data version the %s is different, the backup restore failure.';
$_LANG['not_sql_file'] ='This isn\'t a sql file, if the file is true, please change the file suffixal name as .sql.';
$_LANG['sqlfile_error'] ='You upload the file failure, the backup restore failure.';
$_LANG['restore_success'] ='Đã khôi phục thành công.';
$_LANG['fail_optimize'] ='Tối ưu hóa bảng dữ liệu %s không thành công.';
$_LANG['optimize_ok'] ='Tối ưu hóa bảng dữ liệu thành công, chống phân mảnh được tổng cộng %d.';
$_LANG['restore_confirm'] ='Khôi phục dữ liệu will clear existing all contents, are you sure recover it?';
$_LANG['fail_import'] ='Import dữ liệu không thành công.';
$_LANG['no_file'] ='Tệp tin này không tồn tại.';
$_LANG['not_support_zip_format'] ='Máy chủ không hỗ trợ định dạng zip, vui lòng giải nén tệp tin và upload lại.';

/* js */
$_LANG['js_languages']['remove_confirm'] ='Bạn có chắc bạn muốn xóa tệp sao lưu?';
$_LANG['js_languages']['lang_remove'] ='Xóa bỏ';
$_LANG['js_languages']['lang_restore'] ='Khôi phục';
$_LANG['js_languages']['lang_download'] ='Tải về';
$_LANG['js_languages']['sql_name_not_null'] ='Tệp tin không được để trống.';
$_LANG['js_languages']['vol_size_not_null'] ='Vui lòng nhập tệp sao lưu.';

/* buckup center */
$_LANG['backup_title'] = 'The part %s of backup is created, It is running automatism.';
$_LANG['backup_notice'] = 'Please chick here ,if your browse has redirect automatism.';
$_LANG['backup_success'] = 'Success';

$_LANG['name'] = 'Tên tệp tin';
$_LANG['ver'] = 'Phiên bản';
$_LANG['add_time'] = 'Thời gian';
$_LANG['file_size'] = 'Size';
$_LANG['empty_upload'] = 'It is empty';
$_LANG['fail_write_file'] = 'The file %s can not writting';
$_LANG['vol'] = 'VOL';
$_LANG['import'] = 'Import';
$_LANG['server_sql'] = 'Server Backup';
$_LANG['submit_remove'] = 'Xóa';
$_LANG['remove_success'] = 'Delete Success';
$_LANG['confirm_import'] = 'Do you want to import other backup';
$_LANG['also_continue'] = 'Yes, I want do it';

$_LANG['dir_priv'] = 'The problem with directory %s :';
$_LANG['dir_not_exist'] = 'This directory %s is not exist, please create it';
$_LANG['cannot_read'] = 'Can not Read';
$_LANG['cannot_write'] = 'Can not Write';
$_LANG['cannot_add'] = 'Can not Add data';
$_LANG['cannot_modify'] = 'Can not Modify';

$_LANG['confirm_remove'] = 'Are you sure delete Items?';

?>