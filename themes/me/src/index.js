import Drawer from "./scripts/Drawer"
import QuickHacks from "./scripts/QuickHacks"
import FormContactUs from "./scripts/FormContactUs";

document.addEventListener('DOMContentLoaded', function () {
  new Drawer('#drawer', '#drawer-toggle', '#drawer-close')
  new QuickHacks()

  const contactUsForm = document.querySelector('#contact-us-form');
  if (contactUsForm) {
    new FormContactUs('#contact-us-form');
  }
});
