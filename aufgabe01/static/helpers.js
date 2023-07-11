// Verkleinert die Fontsize in der oberen Leiste, wenn Text in Klammern
function shrinkParanthesesText() {
    topBar = document.getElementById('topBar').innerHTML;
    topBar = topBar.replace(/\(([^\)]+)\)/gi, '<kleiner>($1)</kleiner>');
    document.getElementById('topBar').innerHTML = topBar;
}
shrinkParanthesesText();

