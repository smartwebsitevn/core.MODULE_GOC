<?php if (isset($list) && $list): ?>
     <ol>
        <?php foreach ($list as $row):    //pr($row);?>
            <li class="item-product">
                <div class="item-info">
                    <div class="item-photo">
                    <a href="<?php echo $row->_url_view; ?>" class="item-img">
                        <img src="<?php echo thumb_img($row->image)//$row->image->url_thumb; ?>"
                             alt="<?php echo $row->name; ?>"/></a>
                    </div>
                    <div class="item-detail">
                        <strong class="item-name">  <a href="<?php echo $row->_url_view; ?>" >
                                <?php echo $row->name; ?></a></strong>
                        <div class="item-meta"><?php echo $row->_cat_name;;//character_limiter($row->target, 50); ?></div>

                        <?php //echo view('tpl::_widget/goc/display/item/info_price', array('info' => $row)); ?>
                        <?php //echo view('tpl::_widget/goc/display/item/info_rate', array('info' => $row)); ?>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ol>
<?php endif; ?>
<?php //$this->load->view('site/_widget/movie/display/item/ajax_pagination') ?>