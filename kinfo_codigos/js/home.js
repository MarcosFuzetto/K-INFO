/*========================================================================PREVIA MUSICAS========================================================================*/
const carrosel = document.querySelector('.div-movimentacao-musicas');
const btnProx = document.getElementById ('prox-btn-musicas');
const btnAnt = document.getElementById ('antes-btn-musicas');

let movimentacao = 0;
let totalMov = 0;

/* avança */
btnProx.addEventListener('click', function(){
    if (totalMov <= 12){
        movimentacao = movimentacao - 50;
        carrosel.style = `transform: translateX(${movimentacao}vw)`;

        totalMov++
    }
})

/* volta */ 
btnAnt.addEventListener('click', function(){
    if (totalMov > 0 ){
    movimentacao = movimentacao + 50;
    carrosel.style = `transform: translateX(${movimentacao}vw)`;

    totalMov--
    }
})

/*========================================================================PREVIA GRUPOS========================================================================*/
const carroselGrupos = document.querySelector('.div-movimentacao-grupos');
const btnProxGrupos = document.getElementById ('prox-btn-grupos');
const btnAntGrupos = document.getElementById ('antes-btn-grupos');

let movimentacaoGrupos = 0;
let totalMovGrupos = 0;

/* avança */
btnProxGrupos.addEventListener('click', function(){
    if (totalMovGrupos <= 4){
        movimentacaoGrupos = movimentacaoGrupos - 50;
        carroselGrupos.style = `transform: translateX(${movimentacaoGrupos}vw)`;

        totalMovGrupos++
    }
})

/* volta */ 
btnAntGrupos.addEventListener('click', function(){
    if (totalMovGrupos > 0 ){
    movimentacaoGrupos = movimentacaoGrupos + 50;
    carroselGrupos.style = `transform: translateX(${movimentacaoGrupos}vw)`;

    totalMovGrupos--
    }
})

/*========================================================================PREVIA ALBUNS========================================================================*/
const carroselAlbuns = document.querySelector('.div-movimentacao-albuns');
const btnProxAlbuns = document.getElementById ('prox-btn-albuns');
const btnAntAlbuns = document.getElementById ('antes-btn-albuns');

let movimentacaoAlbuns = 0;
let totalMovAlbuns = 0;

/* avança */
btnProxAlbuns.addEventListener('click', function(){
    if (totalMovAlbuns <= 12){
        movimentacaoAlbuns = movimentacaoAlbuns - 50;
        carroselAlbuns.style = `transform: translateX(${movimentacaoAlbuns}vw)`;

        totalMovAlbuns++
    }
})

/* volta */ 
btnAntAlbuns.addEventListener('click', function(){
    if (totalMovAlbuns > 0 ){
    movimentacaoAlbuns = movimentacaoAlbuns + 50;
    carroselAlbuns.style = `transform: translateX(${movimentacaoAlbuns}vw)`;

    totalMovAlbuns--
    }
})

