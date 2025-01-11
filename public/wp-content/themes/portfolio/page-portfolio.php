<?php
/**
 * Title: portfolio
 * Slug: profile/portfolio
 * Categories: portfolio
 */
?>

<?php 
get_header(); 
?>

<div class="sm:my-40 my-20 mx-4">
    <h2 class="text-lg font-semibold">制作物</h2>
    <h6 class="text-sm">Portfolio</h6>

    <div class="sm:flex block justify-start items-start sm:my-20 my-10 gap-10">
        <div class="sm:w-1/2 w-full sm:mb-0 mb-10">
            <h2 class="text-lg font-semibold">ホームページ制作</h2>
            <?php
            $args = array(
                'post_type' => 'portfolio',
                'category_name' => 'hp',
                'posts_per_page' => -1
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
            ?>
            <div class="flex justify-start items-start gap-4 border p-2 my-4">
                <div class="w-1/3">
                    <img src="<?php echo get_field("p_image") ?>" alt="">
                </div>
                <div class="w-2/3 flex flex-col gap-6 my-4">
                    <div class="flex flex-col gap-2">
                        <h3 class="text-base font-semibold"><?php echo get_field('p_title'); ?></h3>
                        <p class="sm:text-sm text-xs"><?php echo get_field("p_description"); ?></p>
                        <a 
                            href="<?php echo get_field("p_link"); ?>" 
                            target="_blank"
                            class="text-sky-500"
                        >
                            <?php echo get_field("p_link"); ?>
                        </a>
                        <div class="flex flex-wrap gap-2">
                        <?php
                            $tags = get_the_tags();
                            if ($tags) {
                                foreach ($tags as $tag) {
                                    echo '<span class="bg-gray-100 text-xs px-2 py-1 rounded">';
                                    echo esc_html($tag->name);
                                    echo '</span>';
                                }
                            }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            endwhile;
            wp_reset_postdata();
            endif;
            ?>
        </div>
        <div class="sm:w-1/2 w-full">
            <h2 class="text-lg font-semibold">Webアプリ</h2>
            <?php
            $args = array(
                'post_type' => 'portfolio',
                'category_name' => 'app',
                'posts_per_page' => -1
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
            ?>
            <div class="flex justify-start items-start gap-4 border p-2 my-4">
                <div class="w-1/3">
                    <img src="<?php echo get_field("p_image") ?>" alt="">
                </div>
                <div class="w-2/3 flex flex-col gap-6 my-4">
                    <div class="flex flex-col gap-2">
                        <h3 class="text-base font-semibold"><?php echo get_field('p_title'); ?></h3>
                        <p class="sm:text-sm text-xs"><?php echo get_field("p_description"); ?></p>
                        <a 
                            href="<?php echo get_field("p_link"); ?>" 
                            target="_blank"
                            class="text-sky-500"
                        >
                            <?php echo get_field("p_link"); ?>
                        </a>
                        <?php
                            $tags = get_the_tags();
                            if ($tags) {
                                foreach ($tags as $tag) {
                                    echo '<span class="bg-gray-100 text-xs px-2 py-1 rounded mr-2">';
                                    echo esc_html($tag->name);
                                    echo '</span>';
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
            <?php
            endwhile;
            wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</div>

<?php 
get_footer(); 
?>