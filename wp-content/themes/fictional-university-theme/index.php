<?php
get_header();

function greet($name,$color){
    echo "<p>Hi my name is $name and my favorite color is $color</p>";
}

greet("Jane","blue");
greet("Mary","Green");

?>

<?php 
while (have_posts(  )){
    the_post(  ); 
 ?>
<p>post above</p>
<?php the_content(  ) ?>

<?php } ?>


<?php get_footer();?>