jQuery(document).ready(function( $ ) {

        $('.panel-collapse').on('show.bs.collapse', function () {
          $(this).siblings('.panel-heading').addClass('active');
        });

        $('.panel-collapse').on('hide.bs.collapse', function () {
          $(this).siblings('.panel-heading').removeClass('active');
        });
        jQuery(document).ready(function() {
          jQuery("#loader-wrapper").fadeOut("slow");
        });
        $('#android').on('click', function () {
            $('#android-detail').addClass('active');
            $('#iphone-detail').removeClass('active');
        });
        $('#iphone').on('click', function () {
            $('#android-detail').removeClass('active');
            $('#iphone-detail').addClass('active');
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload").change(function() {
            readURL(this);
        });
  
});
