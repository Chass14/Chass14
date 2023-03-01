// Get the social links from the database and update the links in the social icons
$(document).ready(function() {
  $.ajax({
    type: "GET",
    url: "get_social_links.php",
    dataType: "json",
    success: function(data) {
      $(".social-icons.top .facebook").attr("href", data.facebook);
      $(".social-icons