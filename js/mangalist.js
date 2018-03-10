function openManga(evt, mangaName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("manga-content");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("header-menu");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(mangaName).style.display = "block";
    evt.currentTarget.className += " active";
}