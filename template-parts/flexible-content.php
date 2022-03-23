<?php

// Check value exists.
if( have_rows('content') ):

  // Loop through rows.
  while ( have_rows('content') ) : the_row(); ?>

<?php
    // Section: Metodology.
    if( get_row_layout() == 'metodologia' ): ?>
<?php get_template_part('template-parts/sections/metodology'); ?>


<?php
    // Section: Products.
    elseif( get_row_layout() == 'produtos' ): ?>
<?php get_template_part('template-parts/sections/products'); ?>

<?php
    // Section: Services.
    elseif( get_row_layout() == 'servicos' ): ?>
<?php get_template_part('template-parts/sections/services'); ?>

<?php
    // Section: Cases.
    elseif( get_row_layout() == 'cases' ): ?>
<?php get_template_part('template-parts/sections/cases'); ?>


<?php get_template_part('template-parts/sections/blog'); ?>

<?php
        // Section: Section Name.
        // if( get_row_layout() == 'paragraph' ):
        //     $text = get_sub_field('text');
            // Do something...

        // Section: Section Name.
        // elseif( get_row_layout() == 'download' ): 
        //     $file = get_sub_field('file');
            // Do something...

        endif;

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;