

<?php
get_header();
?>
<div class="publicationsSingle">

    <div class="publicationsSingleContainer">
        <div class="pageContainer">
            <div class="publicationsSingle-title">
                <h1><? echo the_title(); ?></h1>
            </div>
        </div>
        <div class="publicationsSingle-Box">
            <div class="pageContainer">
                <div class="publicationsSingle-bg">
               <?php echo the_post_thumbnail( 'thumbnail' ); ?>

                </div>
                <div class="publicationsSinglePost">
                    <div class="publicationsSinglePost-people">
                        <?php $profile_picture = get_field( 'profile_picture' ); ?>
                        <?php if ( $profile_picture ) : ?>
                            <img src="<?php echo esc_url( $profile_picture['url'] ); ?>" alt="<?php echo esc_attr( $profile_picture['alt'] ); ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="publicationsSinglePost-info">
                        <?php
                        $publications_people=get_field( 'publications_people' );
                        foreach ($publications_people as $pp){
                         ?>
                            <h5 class="publicationsSinglePost-titleOne"><?php echo $pp['publications_people_name'];?></h5>

                        <?php
                        }
                            the_content();
                        ?>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php
get_footer();
?>
