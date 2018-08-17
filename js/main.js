(function ($, Drupal) {
  Drupal.behaviors.CapableBehavior = {
    attach: function (context, settings) {
      var loc = window.location.href;
      $(".site-footer").html("<p>" + loc + "</p>" + '<div id="footeruser"></div>');
      $(".site-footer").css("color", "#FFF");
      $(".site-footer").css("text-align", "center");
    }
  };
})(jQuery, Drupal);


(function ($, Drupal, drupalSettings) {

  Drupal.behaviors.CapableConfigBehavior = {
    attach: function (context, settings) {
      var userID = drupalSettings.user.uid;
      var examplevar = drupalSettings.examplevar;
      if (examplevar == undefined) {
        examplevar = '';
      }
      $("#footeruser").html("user id:" + userID + '<br/>' + examplevar);
    }
  };
})(jQuery, Drupal, drupalSettings);
