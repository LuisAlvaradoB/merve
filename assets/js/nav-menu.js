function displayMenu() {

   var element = document.getElementById("nav_display");
   var iconElement = document.getElementById("arrowIcon");
   
   if(element.className == "nav_display")
   {
      element.setAttribute("class","nav_display on");
   }
   else
   {
      element.className = "nav_display";
   }

   
   if(iconElement.className == "fas fa-chevron-down icon-arrow")
   {
      iconElement.setAttribute("class","fas fa-chevron-up icon-arrow");
   }
   else
   {
      iconElement.className = "fas fa-chevron-down icon-arrow"   ;
   }
}
   