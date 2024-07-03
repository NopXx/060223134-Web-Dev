$(document).ready(function () {
  $("#menu-btn").on("click", function (e) {
    $("#mobile-menu").each(function (e) {
      $(this).toggleClass("hidden");
    });
  });

  let pathname = window.location.pathname.split("/").pop();

  if (pathname != "") {
    $("a").each(function (i, e) {
      if ($(this).attr("href") == pathname) {
        $(this).addClass("bg-gray-900 text-white");
      } else {
        $(this).removeClass("bg-gray-900");
      }
    });
  }
});
