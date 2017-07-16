<div class="heading-op3">Đánh giá khóa học</div>
<div class="comment">
        <?php if(mod("goc")->setting('comment_allow')){
            widget('comment')->comment($info,'goc');
        } ?>
        <?php  widget('comment')->comment_list($info,'goc') ?>
</div>

