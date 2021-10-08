// Delivery Partner Section Changing Text Animation
var deliverytext = [
  "Gender No Bar",
  "Cycle, Bike, Scooter, e-rickshaw,ola, uber: Just Ride on!",
  "More Income, More Izzat",
  "Women Power!",
];
var deliverycounter = 0;
var deliveryelem = $("#delivery-partner-section-changing-text");
setInterval(change, 3000);
function change() {
  deliveryelem.fadeOut(function () {
    deliveryelem.html(deliverytext[deliverycounter]);
    deliverycounter++;
    if (deliverycounter >= deliverytext.length) {
      deliverycounter = 0;
    }
    deliveryelem.fadeIn();
  });
}
