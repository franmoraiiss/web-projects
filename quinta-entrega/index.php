<?php get_header(); ?>

<div class="blog center">
        
        <div class="wrap">

            <br>
            <h2>Bloguinho</h2>
            

            <div class="box-post-list">

                <?php
                    $args = array('post_type'=>'post', 'showposts'=> 2);
                    $my_posts = get_posts( $args );

                ?>

                <?php $cont = 1; if( $my_posts ) : foreach( $my_posts as $post ) : setup_postdata( $post ); ?>

                <br>
                <div class="post">
                    <div class="card">
                        
                    <div class="card-image">
                        <?php the_post_thumbnail(); ?>
                        <span class="card-title"><?php the_title(); ?></span>
                    </div>

                    <div class="card-content">
                            <?php the_excerpt(); ?>
                    </div>

                    
                    <a href="<?php the_permalink(); ?>" class="custom-button">Leia mais</a>
                    <br>

                    </div> 

                </div>
                <br>

                <?php $cont ++ ; endforeach; endif; ?>

            </div>

        </div>
</div>


<?php get_footer(); ?>