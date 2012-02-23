<div id="logos">
  <div id="logos-inside"> <img src="../admin/images/ecshop_logo.gif" alt="ECSHOP" /> </div>
<div id="lang-menu">
  <div id="lang-menu-inside">
    <?php echo $lang['select_installer_lang'];?><img src="images/cn.gif" alt="<?php echo $lang['simplified_chinese'];?>" />
    <?php if (EC_CHARSET == 'utf-8'){ ?>
    <img src="images/vn.gif" alt="<?php echo $lang['vietnamese'];?>" />
    <input type="radio" name="js-lang" id="js-vi_vn" class="p" />
    <label for="js-vi_vn"><?php echo $lang['vietnamese'];?></label>&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="images/us.gif" alt="<?php echo $lang['americanese'];?>" />
    <input type="radio" name="js-lang" id="js-en_us" class="p" />
    <label for="js-en_us"><?php echo $lang['americanese'];?></label><?php } ?>
  </div>
</div>
</div>
