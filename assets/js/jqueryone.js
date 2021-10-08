// Customer Section Changing Text Animation
var text = [
  "Don’t swiggy,<br> Just Ghar ka Khana",
  "zo-MAA-to ki kasam,<br> Stay home",
  "Gro-fers is Next Day,<br> Pantr<span class='new-span'>YO</span> is Today",
  "No Bazar is BIGger than your<br> <span class='new-span'>Yo-Yo</span> ki Dukaan",
  "You don’t need a BIGger Basket,<br> you just need Araam",
];
var counter = 0;
var elem = $("#customer-section-changing-text");
setInterval(change, 3000);
function change() {
  elem.fadeOut(function () {
    elem.html(text[counter]);
    counter++;
    if (counter >= text.length) {
      counter = 0;
    }
    elem.fadeIn();
  });
}
