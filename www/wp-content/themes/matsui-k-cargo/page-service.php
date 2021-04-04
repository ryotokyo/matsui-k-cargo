<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php // check if the repeater field has rows of data 
        ?>
        <?php if (have_rows('strengths')) : ?>
            <?php // loop through the rows of data 
            ?>
            <div class="wp-block-group">
                <div class="wp-block-group__inner-container">
                    <div class="wp-block-columns has-3-columns">
                        <?php while (have_rows('strengths')) : the_row(); ?>
                            <div class="wp-block-column">
                                <!-- <figure class="wp-block-image"><img loading="lazy" width="1024" height="680" src="https://demo.dev3.biz/law/wp-content/uploads/2019/05/speed-1249610_1920-1024x680.jpg" alt="" class="wp-image-1138" srcset="https://demo.dev3.biz/law/wp-content/uploads/2019/05/speed-1249610_1920-1024x680.jpg 1024w, https://demo.dev3.biz/law/wp-content/uploads/2019/05/speed-1249610_1920-300x199.jpg 300w, https://demo.dev3.biz/law/wp-content/uploads/2019/05/speed-1249610_1920-768x510.jpg 768w, https://demo.dev3.biz/law/wp-content/uploads/2019/05/speed-1249610_1920-1536x1020.jpg 1536w, https://demo.dev3.biz/law/wp-content/uploads/2019/05/speed-1249610_1920.jpg 1920w" sizes="(max-width: 1024px) 100vw, 1024px"></figure> -->
                                <?php // the_sub_field('strengths_image'); 
                                ?>

                                <img src="<?php the_sub_field('strengths_image'); ?>" />
                                <h4><?php the_sub_field('strengths_heading'); ?></h4>
                                <ul class="is-style-vk-arrow-mark">
                                    <li>
                                        <?php the_sub_field('strengths_details'); ?>
                                    </li>
                                </ul>
                            </div>
                            <?php // display a sub field value 
                            ?>
                        <?php endwhile; ?>
                    </div>


                    <div class="wp-block-vk-blocks-pr-content vk_prContent vk_prContent-layout-imageLeft">
                        <div class="col-sm-6 vk_prContent_colImg"><img class="vk_prContent_colImg_image" src="https://demo.dev3.biz/law/wp-content/uploads/2020/09/page-header02.jpg" alt="画像をアップロード" style="border:none"></div>
                        <div class="col-sm-6 vk_prContent_colTxt">
                            <h3 class="vk_prContent_colTxt_title">画像とテキストの組み合わせ </h3>
                            <p class="vk_prContent_colTxt_text"> このブロックは PR Content ブロックで作成してあります。<br>画像 / 見出し / テキスト / ボタン というよくある組み合わせです。<br>文字色やボタンの色、画像の左右レイアウトなどを指定する事ができます。 </p>
                            <div class="vk_button vk_button-color-custom"><a href="https://www.google.com/" class="btn btn-block vk_button_link vk_prContent_colTxt_btn btn-primary" style="background-color:#cf2e2e;border:1px solid #cf2e2e"><i class="fas vk_button_link_before fa-user"></i><span class="vk_button_link_txt">このボタンはダミーです</span><i class="fas vk_button_link_before fa-arrow-circle-right"></i></a></div>
                        </div>
                    </div>

                </div>
            </div>
        <?php else : ?>
            <?php  // no rows found
            ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>