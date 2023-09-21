<?php
/*
Template Name: Homepage
*/
?>
<?php get_header();


$banner_title = get_field("banner_title");
$banner_description = get_field("banner_description");
$banner_button_text = get_field("banner_button_lable");
$banner_form_title = get_field("banner_form_title");
$banner_background_image = get_field("banner_background_image");

?>



<!--               Banner                -->

<style>
    .banner {
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
            url(<?php echo $banner_background_image['url'] ?>);
        ;
    }
</style>


<section id="banner ">
    <div class="banner">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between banner-body">
                <div class="head-text">
                    <h1 class="py-2">
                        <?php echo $banner_title ? $banner_title : "Reliable Carpet and Upholstery Cleaning Service" ?>
                    </h1>
                    <p class="py-3">
                        <?php echo $banner_description ? $banner_description : "Is Just A Call Away We are equipped to tackle the most stubborn
                        stains with 100% efficiency. We use eco-friendly, non-toxic and
                        safe cleaning solutions to deliver satisfactory results. Get $10
                        Off on Online Quote" ?>

                    </p>
                    <button class="btn site-button py-2 head-text-button scrollToFormButton">
                        <?php echo $banner_button_text ? $banner_button_text : "Request An Estimate Now" ?>
                    </button>
                </div>

                <!--                                                  CONTACT FORM                                               -->

                <div class="contact-form bg-white px-4 py-4">
                    <h2 class="form-header-text">
                        <?php echo $banner_form_title ? $banner_form_title : "Get A Free Quote" ?>
                    </h2>

                    <!-- Form 7 Integration    -->

                    <?php echo do_shortcode('[contact-form-7 id="37bc704" title="Untitled"]'); ?>
                    <button type="submit" class="form-button site-button btn px-5 mt-3 mb-2">
                        Submit Now
                    </button>

                </div>

                <!--               // FORM                                                    -->
            </div>
        </div>
    </div>
</section>


<!--                 About Perfect DryServices                 -->

<!--                                                   media@728                                                                   -->


<?php

$about_title = get_field("about_title");
$about_image = get_field("about_image");
$about_decriptionone = get_field("about_decriptionone");
$about_descriptiontwo = get_field("about_descriptiontwo");
$about_button_title = get_field("about_button_title");

if ($about_image) {
    $about_image_url = $about_image["url"];
}

?>
<div class="container media-786">
    <h1 class="mb-3 media-h1">About Perfect Dry Services</h1>

    <div class="row">
        <div class="col">
            <div class="picture-service">
                <img src="<?php echo $about_image_url ?>" alt="About Image" />
            </div>
        </div>
        <div class="col col-p">
            <p>
                <?php echo $about_decriptionone ? $about_decriptionone : "Description" ?>
            </p>
            <p class="mb-3">
                <?php echo $about_descriptiontwo ? $about_descriptiontwo : "Description" ?>

            </p>
        </div>
    </div>
</div>

<!--   Main View   -->



<div class="container">
    <section class="about-perfect">
        <div class="service d-flex">
            <div class="picture-service">
                <img src="<?php echo $about_image_url ?>" alt="About Image" srcset="" />
            </div>
            <span class="vactor-0"><img src="./assets/Images/5.png" alt="" srcset="" /></span>
            <div class="about">
                <span class="vactor-1"><img src="./assets/Images/4.png" alt="" srcset="" /></span>
                <h1 class="mb-3">
                    <?php echo $about_title ? $about_title : "About Perfect Dry Services" ?>
                </h1>
                <p>
                    <?php echo $about_decriptionone ? $about_decriptionone : "Description" ?>
                </p>
                <p class="mb-3">
                    <?php echo $about_descriptiontwo ? $about_descriptiontwo : "Description" ?>
                </p>
                <button class="btn px-4 about-btn site-button mt-2 scrollToFormButton">
                    <?php echo $about_button_title ? $about_button_title : "Button Title" ?>
                </button>
                <span class="vactor-2"><img src="./assets/Images/6.png" alt="" srcset="" /></span>
            </div>
        </div>
    </section>
</div>

<!--                   carpet Section                     -->


<?php

$carpet_title = get_field("carpet_title");
$carpet_description = get_field("carpet_description");
$carpet_button_title = get_field("carpet_button_title");
?>

<section class="carpet-section">
    <div class="container carp-container">
        <div class="carpet-section-header d-flex flex-column align-items-center">
            <h1 class="text-light mt-5 service-text-h1">
                <?php echo $carpet_title ? $carpet_title : "Carpet Cleaning Services Includes" ?>
            </h1>
            <p class="text-light service-text-p text-center mb-5">

                <?php echo $carpet_description ? $carpet_description : "Description" ?>

            </p>
        </div>

        <!--               carousel 1                 -->


        <?php

        $carousel_one_image = the_sub_field("carousel_one_image");
        $carousel_title = the_sub_field("carousel_title");
        $carousel_description = the_sub_field("carousel_description");
        $carousel_items = get_field('carousel_one');



        ?>

        <div class="carousel-body d-flex flex-column align-items-center">
            <div class="owl-carousel owl-theme carousel-1">

                <?php

                if ($carousel_items) {
                    foreach ($carousel_items as $carousel_item) {
                        $image = $carousel_item['carousel_one_image'];
                        $title = $carousel_item['carousel_title'];
                        $description = $carousel_item['carousel_description'];

                        echo '<div class="item">';
                        echo '<div class="card-1 bg-light carousel-cards">';
                        echo ' <img class="card-img" src="' . esc_url($image['url']) . '" alt="card-one-image" />';
                        echo '<div class="item">';
                        echo '<h5 class="text-center">' . esc_html($title) . '</h5>';
                        echo ' <p class="text-center">' . esc_html($description) . '</p>';
                        echo '<a class="read-more fw-semibold" href="#">Read More <span>&#8594;</span></a>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';

                    }
                }
                ?>

            </div>

            <button class="btn px-4 mb-5 site-button mt-2">
                <?php echo $carpet_button_title ? $carpet_button_title : "View All Services" ?>
            </button>
        </div>
    </div>
</section>

<!--                    Why Choose Us?              -->



<?php

$choose_us_button_title = get_field("choose_us_button_title");
$checkthree = get_field("checkthree");
$checktwo = get_field("checktwo");
$checkone = get_field("checkone");
$choose_us_description = get_field("choose_us_description");
$choose_us_title = get_field("choose_us_title");
$choose_us_image = get_field("choose_us_image");

if ($choose_us_image) {
    $choose_us_image_url = $choose_us_image["url"];
}

?>

<!--          media@786                -->

<div class="container media-786">
    <h1 class="mb-3 media-h1">
        <?php echo $choose_us_title ? $choose_us_title : "Why Choose Us?" ?>
    </h1>

    <div class="row">
        <div class="col">
            <div class="picture-service">
                <img src="./assets/Images/choose.png" alt="image" srcset="" />
            </div>
        </div>
        <div class="col col-p d-flex flex-column align-items-center">
            <p>
                <?php echo $choose_us_description ? $choose_us_description : "Description" ?>
            </p>

            <div class="h3tick">
                <h3>
                    <span style="color: #d2292d">&#10003; </span>
                    <?php echo $checkone ? $checkone : " Quality Workmanship" ?>
                </h3>
                <h3>
                    <span style="color: #d2292d">&#10003; </span>
                    <?php echo $checktwo ? $checktwo : " Free Stain Removal" ?>
                </h3>
                <h3>
                    <span style="color: #d2292d">&#10003; </span>
                    <?php echo $checkthree ? $checkthree : " Honest And Transparent" ?>

                </h3>
            </div>
            <button class="btn site-button mt-2 px-3 scrollToFormButton">
                <?php echo $choose_us_button_title ? $choose_us_button_title : " Request An Estimate Now" ?>
            </button>
        </div>
    </div>
</div>

<!--                      Choose US Section                      -->

<div class="container">
    <section class="why-choose-us">
        <div class="service d-flex">
            <div class="picture-service-2">
                <img src=<?php echo $choose_us_image_url ?> alt="image" />
            </div>
            <span class="vactor-triangle"><img src="<?php get_template_directory_uri(); ?>./assets/Images/Vector-2.png"
                    alt="" srcset="" /></span>
            <div class="about">
                <span class="vactor-square"><img src="./assets/Images/vactor-1.png" alt="" srcset="" /></span>

                <h1 class="mb-3">
                    <?php echo $choose_us_title ? $choose_us_title : "Why Choose Us?" ?>
                </h1>
                <p>

                    <?php echo $choose_us_description ? $choose_us_description : "Description" ?>

                </p>
                <div class="h3tick">
                    <h3>
                        <span style="color: #d2292d">&#10003; </span>
                        <?php echo $checkone ? $checkone : " Quality Workmanship" ?>
                    </h3>
                    <h3>
                        <span style="color: #d2292d">&#10003; </span>
                        <?php echo $checktwo ? $checktwo : " Free Stain Removal" ?>
                    </h3>
                    <h3>
                        <span style="color: #d2292d">&#10003; </span>
                        <?php echo $checkthree ? $checkthree : " Honest And Transparent" ?>
                    </h3>
                </div>

                <button class="btn site-button mt-2 px-5 scrollToFormButton" style="padding: 10px">
                    <?php echo $choose_us_button_title ? $choose_us_button_title : " Request An Estimate Now" ?>
                </button>
                <span class="vactor-circle"><img src="./assets/Images/5.png"" alt=" rounded" srcset="" /></span>
            </div>
        </div>
    </section>
</div>

<!--                   red banner                    -->

<?php
$red_banner_button_title = get_field("red_banner_button_title");
$red_banner_description = get_field("red_banner_description");
$red_banner_title = get_field("red_banner_title");
?>

<section class="red-banner-section py-4">
    <div class="container">
        <div class="red-banner d-flex align-items-center justify-content-around">
            <div class="banner-des">
                <h2 class="text-light">
                    <?php echo $red_banner_title ? $red_banner_title : "Excellent Quality Carpet Cleaning Services" ?>

                </h2>
                <h3 class="text-light">
                    <?php echo $red_banner_description ? $red_banner_description : " Glam your Carpet Today! Call us today for a free quotes Call : 022
                    030 4004" ?>


                </h3>
            </div>
            <div class="vertical-line"></div>

            <div class="banner-btn-div">
                <button class="btn site-button py-2 px-4 banner-btn scrollToFormButton">
                    <?php echo $red_banner_button_title ? $red_banner_button_title : "Request An Estimate Now" ?>
                </button>
            </div>
        </div>
    </div>
</section>

<!--          Gallery                            -->

<?php

$gallery_button_label = get_field("gallery_button_label");
$gallery_image_container = get_field('gallery_image_container');

?>

<section class="gallery-sec">
    <div class="container">
        <div class="gallery-main d-flex flex-column align-items-center">
            <h1>Our Gallery</h1>
            <span class="vactor-0-2"><img src="./assets/Images/Our-customer/circle2.png" alt="" srcset="" /></span>

            <div class="image-gallery d-flex flex-wrap">

                <?php

                if ($gallery_image_container) {

                    foreach ($gallery_image_container as $gallery_images) {

                        $gallery_image = $gallery_images['gallery_image'];
                        $gallery_paragraph = $gallery_images['gallery_image_lable'];

                        echo '<div class="image-div">';
                        echo '<img src="' . esc_url($gallery_image['url']) . '" alt="Image one" />';
                        echo '<p class="text-light hidden-p">' . esc_html($gallery_paragraph) . '</p>';
                        echo '</div>';

                    }
                }

                ?>

            </div>
            <button class="btn gallery-btn site-button px-5 py-2">
                <?php echo $gallery_button_label ? $gallery_button_label : "View More" ?>
            </button>
        </div>
    </div>
</section>

<!--                     Our Customer Stories              -->

<?php

$our_customer_description = get_field("our_customer_description");
$our_customer_title = get_field("our_customer_title");

?>


<div class="container">
    <section class="our-customer-stories">
        <div class="our-customer-story mt-5">
            <span class="rectangle"><img src="./assets/Images/Our-customer/Rectangle.png" alt="" /></span>
            <h1 class="text-center">
                <?php echo $our_customer_title ? $our_customer_title : "Our Customer Stories" ?>
            </h1>
            <span class="circle"><img src="./assets/Images/Our-customer/circle.png" alt="" /></span>
            <p class="text-center mb-5">
                <?php echo $our_customer_description ? $our_customer_description : "Description" ?>

            </p>
        </div>

        <!--                         carousel 2                              -->



        <div class="carousel-body mt-5">
            <div class="owl-carousel owl-theme carousel-2">

                <?php
                $carousel_two = get_field('carousel_two');


                if ($carousel_two) {

                    foreach ($carousel_two as $carousel_two_item) {

                        $carousel_two_image = $carousel_two_item['carousel_two_image'];
                        $carousel_two_title = $carousel_two_item['carousel_two_title'];
                        $author = $carousel_two_item['author'];
                        $carousel_two_description = $carousel_two_item['carousel_two_description'];



                        echo '<div class="item">';
                        echo '<div class="card-b carousel-cards d-flex flex-column">';
                        echo '<img class="card-b-img" src="' . esc_url($carousel_two_image['url']) . '" alt="card-one-image"';
                        echo '<div class="card-body d-flex flex-column align-items-center">';
                        echo '<h5 class="text-center">' . esc_html($carousel_two_title ? $carousel_two_title : "Wonderful Service") . '</h5>';
                        echo '<span>' . esc_html($author ? $author : "Charlotte Robinson") . '</span>';
                        echo '<p class="text-center mt-2 para">' . esc_html($carousel_two_description ? $carousel_two_description : "Description") . '</p>';
                        echo '</div>';
                        echo '</div>';
                        ;
                    }
                }

                ?>

            </div>
        </div>
        <span class="carouse-vactor-2"><img src="/assets/Images/Vector-2.png" alt="" srcset="" /></span>
    </section>
</div>

<div class="map">


    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3187.6965512582706!2d174.9281856767304!3d-36.96930348625134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d4d6979632d83%3A0x30566e7e7a633f0f!2sPerfect%20Dry!5e0!3m2!1sen!2sin!4v1695213805204!5m2!1sen!2sin"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<?php
get_footer();
?>