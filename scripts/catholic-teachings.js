const biblia=document.getElementById("bibliaCatholica");
const preces=document.getElementById("precesRosarii");
const catechismvs=document.getElementById("catechismvs");
const codex=document.getElementById("codexCanonici");

biblia.onclick=function(){
    window.location.href="https://vulgate.org/";
}
preces.onclick=function(){
    window.location.href="https://www.prayinglatin.com/prayers-of-the-rosary-in-latin/";
}
catechismvs.onclick=function(){
    window.location.href="https://www.vatican.va/archive/ENG0015/_INDEX.HTM";
}
codex.onclick=function(){
    window.location.href="https://www.vatican.va/archive/cod-iuris-canonici/cic_index_en.html";
}