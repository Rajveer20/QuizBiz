// show the given page, hide the rest
function show(elementID) {
    // find the requested page and alert if it's not found
    const ele = document.getElementById(elementID);
    if (!ele) {
      alert("no such element");
      return;
    }
  
    // get all pages, loop through them and hide them
    const pages = document.getElementsByClassName('page');
    for (let i = 0; i < pages.length; i++) {
      pages[i].style.display = 'none';
    }
    
    // then show the requested page
    ele.style.display = 'block';
  }

  function showAll(){
    const pages = document.getElementsByClassName('page');
    for (let i = 0; i < pages.length; i++) {
      pages[i].style.display = 'block';
    }
  }

 function generateRandomString() {
  $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $charactersLength = strlen($characters);
  $randomString = '';
  for ($i = 0; $i < 6; $i++) {
      $randomString += $characters[rand(0, $charactersLength - 1)];
  }
  return $randomString;
 }