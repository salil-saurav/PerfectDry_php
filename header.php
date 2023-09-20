<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>



<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>


<?php

$logo = get_field("logo_image", "option");
$email = get_field("email", "option");
$phone = get_field("phone", "option");

?>

<body>


    <div class="container">
        <header class="main-header d-flex justify-content-between mt-4 mb-4">
            <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="logo">
                <span>
                    <a href="#">
                        <img class="logo-media" src="<?php echo $logo['url'] ?>" alt="Logo" srcset="" />
                    </a>
                </span>
            </div>

            <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="contact-logo d-none">
                <span class="mail-svg-span"><svg class="mail-svg" xmlns="http://www.w3.org/2000/svg" height="24"
                        viewBox="0 -960 960 960" width="24">
                        <path
                            d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280L160-640v400h640v-400L480-440Zm0-80 320-200H160l320 200ZM160-640v-80 480-400Z" />
                    </svg></span>
                <span class="call-svg-span">
                    <svg class="call-svg" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
                        width="24">
                        <path
                            d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12ZM241-600l66-66-17-94h-89q5 41 14 81t26 79Zm358 358q39 17 79.5 27t81.5 13v-88l-94-19-67 67ZM241-600Zm358 358Z" />
                    </svg></span>
            </div>
            <div class="contact-us d-flex">
                <div class="mail me-4 px-4 py-2">
                    <a class="mail-add" href="mailto:<?php $email ?>">
                        <?php echo $email ? $email : "info@perfectdry.co.nz" ?>
                    </a>
                </div>
                <div class="num py-2">
                    <a href="tel:<?php $phone ?>">
                        <?php echo $phone ? $phone : "Call : 022 030 4004" ?>
                    </a>
                </div>
            </div>
        </header>
    </div>