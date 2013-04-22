
<footer>
    <p>&copy; Company 2013</p>
</footer>

</div> <!-- /container -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?=SITE_TEMPLATE_PATH;?>/assets/js/jquery.js"></script>
<script src="<?=SITE_TEMPLATE_PATH;?>/assets/js/bootstrap-transition.js"></script>
<script src="<?=SITE_TEMPLATE_PATH;?>/assets/js/bootstrap-alert.js"></script>
<script src="<?=SITE_TEMPLATE_PATH;?>/assets/js/bootstrap-modal.js"></script>
<script src="<?=SITE_TEMPLATE_PATH;?>/assets/js/bootstrap-dropdown.js"></script>
<script src="<?=SITE_TEMPLATE_PATH;?>/assets/js/bootstrap-scrollspy.js"></script>
<script src="<?=SITE_TEMPLATE_PATH;?>/assets/js/bootstrap-tab.js"></script>
<script src="<?=SITE_TEMPLATE_PATH;?>/assets/js/bootstrap-tooltip.js"></script>
<script src="<?=SITE_TEMPLATE_PATH;?>/assets/js/bootstrap-popover.js"></script>
<script src="<?=SITE_TEMPLATE_PATH;?>/assets/js/bootstrap-button.js"></script>
<script src="<?=SITE_TEMPLATE_PATH;?>/assets/js/bootstrap-collapse.js"></script>
<script src="<?=SITE_TEMPLATE_PATH;?>/assets/js/bootstrap-carousel.js"></script>
<script src="<?=SITE_TEMPLATE_PATH;?>/assets/js/bootstrap-typeahead.js"></script>
<script src="<?=SITE_TEMPLATE_PATH;?>/assets/js/rate/jquery.raty.min.js"></script>

<script type="text/javascript">
    $(function() {
        $('.star').raty({
            path: '<?=SITE_TEMPLATE_PATH;?>/assets/js/rate/img',
            readOnly: true,
            score: function() {
                return $(this).attr('data-score');
            }
        });
        $('#btn-show-filter').click(function(){
            $('#filter-block').toggle();
        });

        function adaptive() {
         //   alert("I'm done resizing for the moment");
         //   console.log($(window).width());
            if ($(window).width() < 1280) {
                $("#block-tour-info").css("width", 1000+"px");
                $("#tour-info-price-operator").css("width", 285+"px");
            }
            if ($(window).width() >= 1280) {
                $("#block-tour-info").css("width", 1280+"px");
                $("#tour-info-price-operator").css("width", 600+"px");
            }

            //if ($("#block-tour-info").width() <= 1280)  $("#block-tour-info").css("width", 1000+"px");
            //if ($("#block-tour-info").width() <= 1280) $("#block-tour-info").css("width", 1280+"px")
        };

        var resizeTimer;
        $(window).resize(function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(adaptive, 100);
        });
        adaptive();

        var selectedBox = $('.filter-type-tours li.selectedBox');
        var leftSelect = 0;    // coords left selected li
        var rightSelect = 0;   // coords right selected li
        $('.filter-type-tours li').click(function(){
              if (leftSelect < this.offset.x)
              console.log(this.offset.x);
        });
        //$('#block-tour-info').resi
    });
</script>
</body>
</html>