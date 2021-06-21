(function($) {
  'use strict';
  
  $(function() {
      // validate signInForm on keyup and submit
      $("#signInForm").validate({
          errorPlacement: function (label, element) {
              label.addClass("mt-2 text-danger font-10pt");
              label.insertAfter(element);
          },
          rules: {
              email: {
                  required: true,
              },
              password: {
                  required: true,
              },
          },
          messages: {
              email: {
                  required: "Please enter a email address",
              },
              password: {
                  required: "Please provide a password",
              },
          },
          highlight: function (element, errorClass) {
              $(element).parent().addClass("has-danger");
              $(element).addClass("form-control-danger");
          },
          success: function (label, element) {
              label.addClass("display-inline");
              $(element).parent().removeClass("has-danger");
              $(element).removeClass("form-control-danger");
          },
      });

      // validate changePasswordForm on keyup and submit
      $("#changePasswordForm").validate({
          errorPlacement: function (label, element) {
              label.addClass("mt-2 text-danger font-10pt");
              label.insertAfter(element);
          },
          highlight: function (element, errorClass) {
              $(element).parent().addClass("has-danger");
              $(element).addClass("form-control-danger");
          },
          success: function (label, element) {
              label.addClass("display-inline");
              $(element).parent().removeClass("has-danger");
              $(element).removeClass("form-control-danger");
          },
          submitHandler: function (form) {
              $("#btnchangePassword").prop("disabled", true);
              $("#btnchangePassword").addClass("disabled");
              this.form.submit();
          },
      });

      // validate bannerSectionForm on keyup and submit
      $("#bannerSectionForm").validate({
          errorPlacement: function (label, element) {
              label.addClass("mt-2 text-danger font-10pt");
              label.insertAfter(element);
          },
          highlight: function (element, errorClass) {
              $(element).parent().addClass("has-danger");
              $(element).addClass("form-control-danger");
          },
          success: function (label, element) {
              label.addClass("display-inline");
              $(element).parent().removeClass("has-danger");
              $(element).removeClass("form-control-danger");
          },
          submitHandler: function (form) {
              $("#btnbannerSection").prop("disabled", true);
              $("#btnbannerSection").addClass("disabled");
              this.form.submit();
          },
      });
  });
})(jQuery);