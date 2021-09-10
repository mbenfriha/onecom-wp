<a id="post-<?php the_ID(); ?>"  href="<?=get_permalink($recent["ID"])?>">
            <div class="background-image-galery relative text-white text-2xl font-extrabold"
                style="background-image: url(<?= get_the_post_thumbnail_url($recent["ID"]) ?>); height: 410px;">
                <div class="absolute bottom-8 left-8 overlay-galery">
                    <p class="uppercase"> <?= the_title() ?></p>
                    <p class="uppercase"><?= the_time('F Y')  ?> - <span class="text-xl uppercase font-normal"><?php if ($category[0]) {
                        echo $category[0]->cat_name ;
                    }?></span> </p>
                </div>
            </div>
        </a>