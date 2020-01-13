<script>
$(document).ready(function() {
   $("#truman-clients-slider").swiperight(function() {
      $(this).carousel('prev');
    });
   $("#truman-clients-slider").swipeleft(function() {
      $(this).carousel('next');
   });
});
</script>