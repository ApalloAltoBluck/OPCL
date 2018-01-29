$(".button-collapse").sideNav();


  $grid = $('.grid').isotope({
    // options
    itemSelector: '.grid-item',
    layoutMode: 'fitRows'
  });
  
  
  $('.filter button').on("click", function () {
    var value = $(this).attr('data-name');
      $grid.isotope({
        filter: value
      });
  })

  function myFunction(){
    var xr = new XMLHttpRequest();
    var url = "saveNewText.php";
    var text = document.getElementById("myDiv").innerHTML;
    var vars = "newText="+text;
    
    xr.open("POST", url, true);
    xr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xr.send(vars);
}
  