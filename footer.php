<?php
$phone = get_field("phone", "option");
$footer_text = get_field("footer_text");

?>



<footer class="footer py-5 pb-0">
    <div class="container">
        <div class="footer-text d-flex flex-column justify-content-center align-items-center">
            <h1 class="footer-h1 text-light text-center">

                <?php echo $footer_text ? $footer_text : "Excellent Quality Carpet Cleaning Services - Glam your Carpet Today!
            Call us today for a free quotes" ?>

                <a style="color: #fff;" href="tel:<?php $phone ?>">
                    <?php echo $phone ? $phone : "Call : 022 030 4004" ?>
                </a>
            </h1>

            <p class="text-light py-2">
                All Rights Reserved 2023 @ Perfect Dry. | Design by Smegoweb
            </p>
            <div class="footer-p-div"></div>
        </div>
    </div>
</footer>

<script src=""></script>
</body>

</html>