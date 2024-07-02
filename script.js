function toggleSection(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
      x.previousElementSibling.className += " w3-green";
  } else { 
      x.className = x.className.replace(" w3-show", "");
      x.previousElementSibling.className = 
      x.previousElementSibling.className.replace(" w3-green", "");
  }
}

function showContent(contentId) {
  var contents = document.getElementsByClassName('main-content');
  for (var i = 0; i < contents.length; i++) {
      contents[i].style.display = 'none';
  }
  var contentToShow = document.getElementById(contentId);
  contentToShow.style.display = 'block';
}

function hideAllContent() {
  var contents = document.getElementsByClassName('main-content');
  for (var i = 0; i < contents.length; i++) {
      contents[i].style.display = 'none';
  }
}
