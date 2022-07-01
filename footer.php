<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rehan_Lodhi
 */

?>

<footer>
    <div>
        <ul>
            <li>Made by Rehan Lodhi</li>
            <li class="icons__item"><a href="https://github.com/rehanlodhi"><img src="<?php echo get_template_directory_uri() . '/assets/images/github.svg' ?>" alt=""></a>
            </li>
            <li class="icons__item"><a href="https://www.linkedin.com/in/rehanlodhi/"><img src="<?php echo get_template_directory_uri() . '/assets/images/linkedin.svg' ?>"
                                                                                           alt=""></a></li>
            <li class="icons__item"><a href="https://www.instagram.com/rehan.27/"><img src="<?php echo get_template_directory_uri() . '/assets/images/instagram.svg' ?>"
                                                                                       alt=""></a></li>
        </ul>
    </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
