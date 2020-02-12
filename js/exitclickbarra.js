$(function () {


  function uncheckBox() {
    var isChecked = $("#casilla").prop("checked");
    if (isChecked) {
      $("#casilla").prop("checked", false);
    }
  }

  $("section").on("click", function () {
    uncheckBox();
  });

  $("header").on("click", function () {
    uncheckBox();
  });

  $("h2").on("click", function () {
    uncheckBox();
  });

  $("#casilla,label").on("click", function (e) {
    e.stopPropagation();
  });
});
