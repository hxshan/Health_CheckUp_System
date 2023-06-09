function showPage(pageId) {
    var pages = document.getElementsByClassName("hidden");
    
    // Hide all contents
    for (var i = 0; i < pages.length; i++) {
      pages[i].style.display = "none";
    }
    
    var page = document.getElementById(pageId);
    page.style.display = "block"; // Show the selected content
  }