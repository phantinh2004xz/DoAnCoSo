<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        //
        
        the_title();
        // Post Content here
        the_content();
        //
    } // end while
} // end if



