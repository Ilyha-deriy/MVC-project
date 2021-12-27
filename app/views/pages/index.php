<?php


foreach ($data['posts'] as $post) {
    $post_date= $post->post_date;
    $change_date =date("d-m-Y", strtotime($post_date));
    ?>
    <div class="article">
        <h2><?php echo $post->post_title ?></h2>
    </div>
        <div class="date">
            <h3>Date - <?php echo $change_date ?></h3>
        </div>
            <div class="post">
                <p>
                    <?php echo $post->post_body ?>
                </p>
            </div>

    <?php
}
