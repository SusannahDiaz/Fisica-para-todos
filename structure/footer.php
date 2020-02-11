<footer class="text-center">
    <!--    <div class="footer-above" id="enlaces">
        </div>
	</div>
        <div class="footer-above">
            <div class="container">
                    <div class="footer-col col-md-2 col-xs-6">
                    	<img src="img/unam_logo.png" class="img-responsive img-centered" alt="">
                    </div>
                    <div class="footer-col col-md-2 col-xs-6">
                    	<img src="img/ifunam_logo.png" class="img-responsive img-centered" alt="">
                    </div>
                    <div class="footer-col col-md-1 col-xs-6">
                    	<img src="img/ingenieria_logo.png" class="img-responsive img-centered" alt="">
                    </div>
                    <div class="footer-col col-md-2 col-xs-6">
                    	<img src="img/cinvestav_logo.png" class="img-responsive img-centered" alt="">
                    </div>
                    <div class="footer-col col-md-1 col-xs-6">
                    	<img src="img/buap_logo.png" class="img-responsive img-centered" alt="">
                    </div>
                    <div class="footer-col col-md-2 col-xs-6">
                    	<img src="img/investigacion_materiales_logo.png" class="img-responsive img-centered" alt="">
                    </div>
                    <div class="footer-col col-md-2 col-xs-12">
                    	<img src="img/carso_logo.png" class="img-responsive img-centered" alt="">
                    </div>
                </div>
            </div>
        </div>-->
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; IFUNAM 2020
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>
    <script src="js/ekko-lightbox.js"></script>

    <!-- for documentation only -->
    <script type="text/javascript">
            $(document).ready(function ($) {
                // delegate calls to data-toggle="lightbox"
                $(document).on('click', '[data-toggle="lightbox"]:not([data-gallery="navigateTo"]):not([data-gallery="example-gallery-11"])', function(event) {
                    event.preventDefault();
                    return $(this).ekkoLightbox({
                        onShown: function() {
                            if (window.console) {
                                return console.log('Checking our the events huh?');
                            }
                        },
						onNavigate: function(direction, itemIndex) {
                            if (window.console) {
                                return console.log('Navigating '+direction+'. Current item: '+itemIndex);
                            }
						}
                    });
                });

                // disable wrapping
                $(document).on('click', '[data-toggle="lightbox"][data-gallery="example-gallery-11"]', function(event) {
                    event.preventDefault();
                    return $(this).ekkoLightbox({
                        wrapping: false
                    });
                });

                //Programmatically call
                $('#open-image').click(function (e) {
                    e.preventDefault();
                    $(this).ekkoLightbox();
                });
                $('#open-youtube').click(function (e) {
                    e.preventDefault();
                    $(this).ekkoLightbox();
                });

				// navigateTo
                $(document).on('click', '[data-toggle="lightbox"][data-gallery="navigateTo"]', function(event) {
                    event.preventDefault();

                    return $(this).ekkoLightbox({
                        onShown: function() {

							this.modal().on('click', '.modal-footer a', function(e) {

								e.preventDefault();
								this.navigateTo(2);

                            }.bind(this));

                        }
                    });
                });


                /**
                 * Documentation specific - ignore this
                 */
                anchors.options.placement = 'left';
                anchors.add('h3');
                $('code[data-code]').each(function() {

                    var $code = $(this),
                        $pair = $('div[data-code="'+$code.data('code')+'"]');

                    $code.hide();
                    var text = $code.text($pair.html()).html().trim().split("\n");
                    var indentLength = text[text.length - 1].match(/^\s+/)
                    indentLength = indentLength ? indentLength[0].length : 24;
                    var indent = '';
                    for(var i = 0; i < indentLength; i++)
                        indent += ' ';
                    if($code.data('trim') == 'all') {
                        for (var i = 0; i < text.length; i++)
                            text[i] = text[i].trim();
                    } else  {
                        for (var i = 0; i < text.length; i++)
                            text[i] = text[i].replace(indent, '    ').replace('    ', '');
                    }
                    text = text.join("\n");
                    $code.html(text).show();

                });
            });
        </script>