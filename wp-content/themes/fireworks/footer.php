<div class="clearfix"></div>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-3"> <img src='<?php  bloginfo('stylesheet_directory'); ?>/images/footer-logo.png' alt="logo"/> </div>
      <div class="col-lg-6">
        <p class="copyright">© <?php echo the_date('Y').' '.get_option('copy_right');?></p>
      </div>
      <div class="col-lg-3 pull-right">
        <ul class="footer-list list-inline">
		testing on git
         <?php       $defaults = array(
                                    'theme_location'  => '',
                                    'menu'            => 'footer_menu',
                                    'container'       => '',
                                    'container_class' => '',
                                    'container_id'    => '',
                                    'menu_class'      => '',
                                    'menu_id'         => '',
                                    'echo'            => false,
                                    'fallback_cb'     => ' ',
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'items_wrap'      => '%3$s',
                                    'depth'           => 0,
                                    'walker'          => ''
                                    );

                                    $navigation=wp_nav_menu( $defaults );
                                    print $navigation;   ?>
        </ul>
      </div>
    </div>
  </div>
</footer>
<!-- end of footer div --> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="<?php  bloginfo('stylesheet_directory'); ?>/js/bootstrap.min.js"></script> 
<script src="<?php  bloginfo('stylesheet_directory'); ?>/js/bootstrap-select.js"></script> 
<script src="<?php  bloginfo('stylesheet_directory'); ?>/js/custom.js"></script> 
<script type="text/javascript">
$('.selectpicker').selectpicker({
style: 'btn-info',
size: 4
  });
</script>
<script>
    $(function() {
        var Accordion = function(el, multiple) {
            this.el = el || {};
            this.multiple = multiple || false;
    
            // Variables privadas
            var links = this.el.find('.links');
            // Evento
            links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
        }
    
        Accordion.prototype.dropdown = function(e) {
            var $el = e.data.el;
                $this = $(this),
                $next = $this.next();
    
            $next.slideToggle();
            $this.parent().toggleClass('open');
    
            if (!e.data.multiple) {
                $el.find('.submenus').not($next).slideUp().parent().removeClass('open');
            };
        }	
    
        var accordion = new Accordion($('#accordion-faq'), false);
    });
    </script>
<script>
$(function() {
	var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		// Variables privadas
		var links = this.el.find('.link');
		// Evento
		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}

	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
			$this = $(this),
			$next = $this.next();

		$next.slideToggle();
		$this.parent().toggleClass('open');

		if (!e.data.multiple) {
			$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
		};
	}	

	var accordion = new Accordion($('#accordion'), false);
});

		jQuery( document ).ready(function() {	
		
			jQuery('a.a2a_button_facebook').html('<i class="fa fa-facebook"></i>');	
			jQuery('a.a2a_button_twitter').html('<i class="fa fa-twitter"></i>');	
			jQuery('a.a2a_button_linkedin').html('<i class="fa fa-linkedin"></i>');	
			
		});
</script>

<?php wp_footer(); ?>
</body>
</html>