console.log("Hello my friend.");
var date = new Date;
var charg_avant = date.getTime();

function date_heure(id) {
        date = new Date;
        h = date.getHours();
        if(h<10)
        {
                h = "0" + h;
        }
        m = date.getMinutes();
        if(m<10)
        {
                m = "0" + m;
        }
        s = date.getSeconds();
        if(s<10)
        {
                s = "0" + s;
        }
        resultat = h + ':' + m + ':'+ s;
        document.getElementById(id).innerHTML = resultat;
        setTimeout('date_heure("' + id + '");','1000');
        return true;
}
function boutonReddit() {
        recherche = document.getElementById("BarreDeRecherche").value;     
        if(recherche === "") {
                document.location.href="https://reddit.com/";
        } else {
                document.location.href="https://reddit.com/search?q=" + encodeURIComponent(recherche);
        } 
}
function boutonTwitter() {
        recherche = document.getElementById("BarreDeRecherche").value;     
        if(recherche === "") {
                document.location.href="https://twitter.com/";
        } else {
                document.location.href="https://twitter.com/search?q=" + encodeURIComponent(recherche);
        } 
}
function boutonFacebook() {
        recherche = document.getElementById("BarreDeRecherche").value;     
        if(recherche === "") {
                document.location.href="https://facebook.com/";
        } else {
                document.location.href="https://facebook.com/search?q=" + encodeURIComponent(recherche);
        } 
}
function boutonYoutube() {
        recherche = document.getElementById("BarreDeRecherche").value;     
        if(recherche === "") {
                document.location.href="https://youtube.com/";
        } else {
                document.location.href="https://youtube.com/search?q=" + encodeURIComponent(recherche);
        } 
}
function boutonGithub() {
        recherche = document.getElementById("BarreDeRecherche").value;     
        if(recherche === "") {
                document.location.href="https://github.com/";
        } else {
                document.location.href="https://github.com/search?q=" + encodeURIComponent(recherche);
        } 
}
function boutonLastfm() {
        recherche = document.getElementById("BarreDeRecherche").value;     
        if(recherche === "") {
                document.location.href="https://last.fm/";
        } else {
                document.location.href="https://last.fm/search?q=" + encodeURIComponent(recherche);
        } 
}
function boutonSoundcloud() {
        recherche = document.getElementById("BarreDeRecherche").value;     
        if(recherche === "") {
                document.location.href="https://soundcloud.com/";
        } else {
                document.location.href="https://soundcloud.com/search?q=" + encodeURIComponent(recherche);
        } 
}
function boutonSpotify() {
        recherche = document.getElementById("BarreDeRecherche").value;     
        if(recherche === "") {
                document.location.href="https://open.spotify.com/";
        } else {
                document.location.href="https://open.spotify.com/search/results/" + encodeURIComponent(recherche);
        } 
}
function boutonUnsplash() {
        recherche = document.getElementById("BarreDeRecherche").value;     
        if(recherche === "") {
                document.location.href="https://unsplash.com/";
        } else {
                document.location.href="https://unsplash.com/search/photos/" + encodeURIComponent(recherche);
        } 
}
function boutonStackoverflow() {
        recherche = document.getElementById("BarreDeRecherche").value;     
        if(recherche === "") {
                document.location.href="https://stackoverflow.com/";
        } else {
                document.location.href="https://stackoverflow.com/search?q=" + encodeURIComponent(recherche);
        } 
}
function boutonDevdocs() {
        recherche = document.getElementById("BarreDeRecherche").value;     
        if(recherche === "") {
                document.location.href="https://devdocs.io/";
        } else {
                document.location.href="https://devdocs.io/search?q=" + encodeURIComponent(recherche);
        } 
}
function boutonWikipedia() {
        recherche = document.getElementById("BarreDeRecherche").value;     
        if(recherche === "") {
                document.location.href="https://wikipedia.org/wiki/";
        } else {
                document.location.href="https://wikipedia.org/wiki/" + encodeURIComponent(recherche);
        } 
}

function Enter() {
    date = new Date;
    charg_apres = date.getTime();
    chargement = "La page a été chargée en " + (charg_apres-charg_avant)/1000 + " seconde(s)";
    console.log(chargement);

}
