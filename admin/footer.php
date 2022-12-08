</div>
<!-- Main Footer -->
<footer class="main-footer">
  <strong>Copyright &copy; 2022-2022</strong>
  All rights reserved.

  <div class="float-right">
    <b>Created By</b> Prity Paul (19MCA1015)<br> Sanjeev kumar Pandey (20MCA1096)
  </div>
  <br>
  <b>Created By</b> Prince Kumar(20MCA1082)
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->


  <!-- AdminLTE for demo purposes -->
  <script src="../dist/js/demo.js"></script>


<script>
  (function() {
    var path = window.location.href;
    $(".nav-link").each(function() {
      var href = $(this).attr('href');
      if (path === decodeURIComponent(href))

      {
        $(this).addClass('active');
        var parent = $(this).closest('.has-treeview');
        parent.addClass('menu-open');
        $(parent).find('.nav-link').first().addClass('active');
        console.log(parent);
      };
    });
  }());
</script>


<script>
  jQuery(document).ready(function() {
    jQuery('#class').change(function() {
      // alert(jQuery(this).val());

      jQuery.ajax({
        url: 'ajax.php',
        type: 'POST',
        data: {
          'class_id': jQuery(this).val()
        },
        dataType: 'json',
        success: function(response) {

          if (response.count > 0) {
            jQuery('#section-container').show();

          } else {
            jQuery('#section-container').hide();
          }

          jQuery('#section').html(response.options);

        }
      });
    });
  })
</script>

</body>

</html>