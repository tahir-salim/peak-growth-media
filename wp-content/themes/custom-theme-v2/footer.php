<?php global $options; ?>

<!-- %%%%%%%%%%%%%%%%%%%%%% Footer Code Goes Here %%%%%%%%%%%%%%%%%%%%%% -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="widget">
                    <a href="<?php echo site_url();?>" class="logo">
                        <!-- <img src="assets/images/logo.png" alt=""> -->
                        Peak <br>
                        Growth <br>
                        Media
                    </a>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <div class="widget">
                    <!-- <ul class="footer-menu">
                        <li><a href="#services">Service</a></li>
                        <li><a href="#cases">Case Studies</a></li>
                        <li><a href="#faqs">FAQs</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul> -->
                    <?php wp_nav_menu( array( 'menu' => 'Footer Menu', 'menu_class'=> 'footer-menu' ) ); ?>
                </div>
            </div>
            <div class="col-md-8 m-auto">
                <div class="row">
                    <div class="col-md-4">
                        <div class="widget">
                            <h6>Working hours:</h6>
                            <p><?php echo $options['timing'];?></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="widget">
                            <h6>Address:</h6>
                            <p><?php echo $options['address'];?></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="widget">
                            <h6>Hit us up:</h6>
                            <p><a href="tel:<?php echo $options['phone_number'];?>"><?php echo $options['phone_number'];?></a></p>
                            <p><a href="mailto:<?php echo $options['email'];?>"><?php echo $options['email'];?></a></p>
                            <ul class="ft-social">
                                <li><a href="<?php echo $options['facebook'];?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="<?php echo $options['youtube'];?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="<?php echo $options['linkedin'];?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</footer>

<div class="copyright text-center">
    <div class="container">
        <!-- <p>All Rights Reserved</p> -->
    </div>
</div>
</main>

<!-- %%%%%%%%%%%%%%%%%%%%%% Footer Code Ends Here %%%%%%%%%%%%%%%%%%%%%% -->
<?php wp_footer(); ?>

<script>
new WOW().init();
</script>

</body>

</html>