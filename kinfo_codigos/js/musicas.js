/*========================================================================BLACKPINK========================================================================*/
const carroselBlackpink = document.querySelector('.div-movimentacao-blackpink');
const btnProxBlackpink = document.getElementById ('prox-btn-blackpink');
const btnAntBlackpink = document.getElementById ('antes-btn-blackpink');

let movimentacaoBlackpink = 0;
let totalMovBlackpink = 0;

/* avança */
btnProxBlackpink.addEventListener('click', function(){
    if (totalMovBlackpink <= 3){
        movimentacaoBlackpink = movimentacaoBlackpink - 50;
        carroselBlackpink.style = `transform: translateX(${movimentacaoBlackpink}vw)`;

        totalMovBlackpink++
    }
})

/* volta */ 
btnAntBlackpink.addEventListener('click', function(){
    if (totalMovBlackpink > 0 ){
        movimentacaoBlackpink = movimentacaoBlackpink + 50;
        carroselBlackpink.style = `transform: translateX(${movimentacaoBlackpink}vw)`;

        totalMovBlackpink--
    }
})


/*========================================================================AESPA========================================================================*/
const carroselAespa = document.querySelector('.div-movimentacao-aespa');
const btnProxAespa = document.getElementById ('prox-btn-aespa');
const btnAntAespa = document.getElementById ('antes-btn-aespa');

let movimentacaoAespa = 0;
let totalMovAespa = 0;

/* avança */
btnProxAespa.addEventListener('click', function(){
    if (totalMovAespa <= 3){
        movimentacaoAespa = movimentacaoAespa - 50;
        carroselAespa.style = `transform: translateX(${movimentacaoAespa}vw)`;

        totalMovAespa++
    }
})

/* volta */ 
btnAntAespa.addEventListener('click', function(){
    if (totalMovAespa > 0 ){
        movimentacaoAespa = movimentacaoAespa + 50;
        carroselAespa.style = `transform: translateX(${movimentacaoAespa}vw)`;

        totalMovAespa--
    }
})


/*========================================================================STRAY KIDS========================================================================*/
const carroselStrayKids= document.querySelector('.div-movimentacao-stray-kids');
const btnProxStrayKids = document.getElementById ('prox-btn-stray-kids');
const btnAntStrayKids = document.getElementById ('antes-btn-stray-kids');

let movimentacaoStrayKids = 0;
let totalMovStrayKids = 0;

/* avança */
btnProxStrayKids.addEventListener('click', function(){
    if (totalMovStrayKids <= 3){
        movimentacaoStrayKids = movimentacaoStrayKids - 50;
        carroselStrayKids.style = `transform: translateX(${movimentacaoStrayKids}vw)`;

        totalMovStrayKids++
    }
})

/* volta */ 
btnAntStrayKids.addEventListener('click', function(){
    if (totalMovStrayKids > 0 ){
        movimentacaoStrayKids = movimentacaoStrayKids + 50;
        carroselStrayKids.style = `transform: translateX(${movimentacaoStrayKids}vw)`;

        totalMovStrayKids--
    }
})

/*========================================================================LE SSERAFIM========================================================================*/
const carroselLesserafim= document.querySelector('.div-movimentacao-lesserafim');
const btnProxLesserafim = document.getElementById ('prox-btn-lesserafim');
const btnAntLesserafim = document.getElementById ('antes-btn-lesserafim');

let movimentacaoLesserafim = 0;
let totalMovLesserafim = 0;

/* avança */
btnProxLesserafim.addEventListener('click', function(){
    if (totalMovLesserafim <= 3){
        movimentacaoLesserafim = movimentacaoLesserafim - 50;
        carroselLesserafim.style = `transform: translateX(${movimentacaoLesserafim}vw)`;

        totalMovLesserafim++
    }
})

/* volta */ 
btnAntLesserafim.addEventListener('click', function(){
    if (totalMovLesserafim > 0 ){
        movimentacaoLesserafim = movimentacaoLesserafim + 50;
        carroselLesserafim.style = `transform: translateX(${movimentacaoLesserafim}vw)`;

        totalMovLesserafim--
    }
})


/*========================================================================KISS OF LIFE========================================================================*/
const carroselKissOfLife= document.querySelector('.div-movimentacao-kiss-of-life');
const btnProxKissOfLife = document.getElementById ('prox-btn-kiss-of-life');
const btnAntKissOfLife = document.getElementById ('antes-btn-kiss-of-life');

let movimentacaoKissOfLife = 0;
let totalMovKissOfLife = 0;

/* avança */
btnProxKissOfLife.addEventListener('click', function(){
    if (totalMovKissOfLife <= 2){
        movimentacaoKissOfLife = movimentacaoKissOfLife - 50;
        carroselKissOfLife.style = `transform: translateX(${movimentacaoKissOfLife}vw)`;

        totalMovKissOfLife++
    }
})

/* volta */ 
btnAntKissOfLife.addEventListener('click', function(){
    if (totalMovKissOfLife > 0 ){
        movimentacaoKissOfLife = movimentacaoKissOfLife + 50;
        carroselKissOfLife.style = `transform: translateX(${movimentacaoKissOfLife}vw)`;

        totalMovKissOfLife--
    }
})

/*========================================================================SEVENTEEN========================================================================*/
const carroselSeventeen= document.querySelector('.div-movimentacao-seventeen');
const btnProxSeventeen = document.getElementById ('prox-btn-seventeen');
const btnAntSeventeen = document.getElementById ('antes-btn-seventeen');

let movimentacaoSeventeen = 0;
let totalMovSeventeen = 0;

/* avança */
btnProxSeventeen.addEventListener('click', function(){
    if (totalMovSeventeen <= 3){
        movimentacaoSeventeen = movimentacaoSeventeen - 50;
        carroselSeventeen.style = `transform: translateX(${movimentacaoSeventeen}vw)`;

        totalMovSeventeen++
    }
})

/* volta */ 
btnAntSeventeen.addEventListener('click', function(){
    if (totalMovSeventeen > 0 ){
        movimentacaoSeventeen = movimentacaoSeventeen + 50;
        carroselSeventeen.style = `transform: translateX(${movimentacaoSeventeen}vw)`;

        totalMovSeventeen--
    }
})

/*========================================================================BTS========================================================================*/
const carroselBts= document.querySelector('.div-movimentacao-bts');
const btnProxBts = document.getElementById ('prox-btn-bts');
const btnAntBts = document.getElementById ('antes-btn-bts');

let movimentacaoBts = 0;
let totalMovBts = 0;

/* avança */
btnProxBts.addEventListener('click', function(){
    if (totalMovBts <= 3){
        movimentacaoBts = movimentacaoBts - 50;
        carroselBts.style = `transform: translateX(${movimentacaoBts}vw)`;

        totalMovBts++
    }
})

/* volta */ 
btnAntBts.addEventListener('click', function(){
    if (totalMovBts > 0 ){
        movimentacaoBts = movimentacaoBts + 50;
        carroselBts.style = `transform: translateX(${movimentacaoBts}vw)`;

        totalMovBts--
    }
})

/*========================================================================NEW JEANS========================================================================*/
const carroselNewJeans= document.querySelector('.div-movimentacao-newjeans');
const btnProxNewJeans = document.getElementById ('prox-btn-newjeans');
const btnAntNewJeans = document.getElementById ('antes-btn-newjeans');

let movimentacaoNewJeans = 0;
let totalMovNewJeans = 0;

/* avança */
btnProxNewJeans.addEventListener('click', function(){
    if (totalMovNewJeans <= 3){
        movimentacaoNewJeans = movimentacaoNewJeans - 50;
        carroselNewJeans.style = `transform: translateX(${movimentacaoNewJeans}vw)`;

        totalMovNewJeans++
    }
})

/* volta */ 
btnAntNewJeans.addEventListener('click', function(){
    if (totalMovNewJeans > 0 ){
        movimentacaoNewJeans = movimentacaoNewJeans + 50;
        carroselNewJeans.style = `transform: translateX(${movimentacaoNewJeans}vw)`;

        totalMovNewJeans--
    }
})

/*========================================================================ENHYPEN========================================================================*/
const carroselEnhypen= document.querySelector('.div-movimentacao-enhypen');
const btnProxEnhypen = document.getElementById ('prox-btn-enhypen');
const btnAntEnhypen = document.getElementById ('antes-btn-enhypen');

let movimentacaoEnhypen = 0;
let totalMovEnhypen = 0;

/* avança */
btnProxEnhypen.addEventListener('click', function(){
    if (totalMovEnhypen <= 3){
        movimentacaoEnhypen = movimentacaoEnhypen - 50;
        carroselEnhypen.style = `transform: translateX(${movimentacaoEnhypen}vw)`;

        totalMovEnhypen++
    }
})

/* volta */ 
btnAntEnhypen.addEventListener('click', function(){
    if (totalMovEnhypen > 0 ){
        movimentacaoEnhypen = movimentacaoEnhypen + 50;
        carroselEnhypen.style = `transform: translateX(${movimentacaoEnhypen}vw)`;

        totalMovEnhypen--
    }
})

/*========================================================================IVE========================================================================*/
const carroselIve= document.querySelector('.div-movimentacao-ive');
const btnProxIve = document.getElementById ('prox-btn-ive');
const btnAntIve = document.getElementById ('antes-btn-ive');

let movimentacaoIve = 0;
let totalMovIve = 0;

/* avança */
btnProxIve.addEventListener('click', function(){
    if (totalMovIve <= 3){
        movimentacaoIve = movimentacaoIve - 50;
        carroselIve.style = `transform: translateX(${movimentacaoIve}vw)`;

        totalMovIve++
    }
})

/* volta */ 
btnAntIve.addEventListener('click', function(){
    if (totalMovIve > 0 ){
        movimentacaoIve = movimentacaoIve + 50;
        carroselIve.style = `transform: translateX(${movimentacaoIve}vw)`;

        totalMovIve--
    }
})

/*========================================================================TWICE========================================================================*/
const carroselTwice= document.querySelector('.div-movimentacao-twice');
const btnProxTwice = document.getElementById ('prox-btn-twice');
const btnAntTwice = document.getElementById ('antes-btn-twice');

let movimentacaoTwice = 0;
let totalMovTwice = 0;

/* avança */
btnProxTwice.addEventListener('click', function(){
    if (totalMovTwice <= 3){
        movimentacaoTwice = movimentacaoTwice - 50;
        carroselTwice.style = `transform: translateX(${movimentacaoTwice}vw)`;

        totalMovTwice++
    }
})

/* volta */ 
btnAntTwice.addEventListener('click', function(){
    if (totalMovTwice > 0 ){
        movimentacaoTwice = movimentacaoTwice + 50;
        carroselTwice.style = `transform: translateX(${movimentacaoTwice}vw)`;

        totalMovTwice--
    }
})

/*========================================================================ITZY========================================================================*/
const carroselItzy= document.querySelector('.div-movimentacao-itzy');
const btnProxItzy = document.getElementById ('prox-btn-itzy');
const btnAntItzy = document.getElementById ('antes-btn-itzy');

let movimentacaoItzy = 0;
let totalMovItzy = 0;

/* avança */
btnProxItzy.addEventListener('click', function(){
    if (totalMovItzy <= 3){
        movimentacaoItzy = movimentacaoItzy - 50;
        carroselItzy.style = `transform: translateX(${movimentacaoItzy}vw)`;

        totalMovItzy++
    }
})

/* volta */ 
btnAntItzy.addEventListener('click', function(){
    if (totalMovItzy > 0 ){
        movimentacaoItzy = movimentacaoItzy + 50;
        carroselItzy.style = `transform: translateX(${movimentacaoItzy}vw)`;

        totalMovItzy--
    }
})

/*========================================================================EVERGLOW========================================================================*/
const carroselEverglow= document.querySelector('.div-movimentacao-everglow');
const btnProxEverglow = document.getElementById ('prox-btn-everglow');
const btnAntEverglow = document.getElementById ('antes-btn-everglow');

let movimentacaoEverglow = 0;
let totalMovEverglow = 0;

/* avança */
btnProxEverglow.addEventListener('click', function(){
    if (totalMovEverglow <= 3){
        movimentacaoEverglow = movimentacaoEverglow - 50;
        carroselEverglow.style = `transform: translateX(${movimentacaoEverglow}vw)`;

        totalMovEverglow++
    }
})

/* volta */ 
btnAntEverglow.addEventListener('click', function(){
    if (totalMovEverglow > 0 ){
        movimentacaoEverglow = movimentacaoEverglow + 50;
        carroselEverglow.style = `transform: translateX(${movimentacaoEverglow}vw)`;

        totalMovEverglow--
    }
})

/*========================================================================ATEEZ========================================================================*/
const carroselAteez= document.querySelector('.div-movimentacao-ateez');
const btnProxAteez = document.getElementById ('prox-btn-ateez');
const btnAntAteez = document.getElementById ('antes-btn-ateez');

let movimentacaoAteez = 0;
let totalMovAteez = 0;

/* avança */
btnProxAteez.addEventListener('click', function(){
    if (totalMovAteez <= 3){
        movimentacaoAteez = movimentacaoAteez - 50;
        carroselAteez.style = `transform: translateX(${movimentacaoAteez}vw)`;

        totalMovAteez++
    }
})

/* volta */ 
btnAntAteez.addEventListener('click', function(){
    if (totalMovAteez > 0 ){
        movimentacaoAteez = movimentacaoAteez + 50;
        carroselAteez.style = `transform: translateX(${movimentacaoAteez}vw)`;

        totalMovAteez--
    }
})


/*========================================================================BABYMONSTER========================================================================*/
const carroselBabymonster= document.querySelector('.div-movimentacao-babymonster');
const btnProxBabymonster = document.getElementById ('prox-btn-babymonster');
const btnAntBabymonster = document.getElementById ('antes-btn-babymonster');

let movimentacaoBabymonster = 0;
let totalMovBabymonster = 0;

/* avança */
btnProxBabymonster.addEventListener('click', function(){
    if (totalMovBabymonster <= 1){
        movimentacaoBabymonster = movimentacaoBabymonster - 50;
        carroselBabymonster.style = `transform: translateX(${movimentacaoBabymonster}vw)`;

        totalMovBabymonster++
    }
})

/* volta */ 
btnAntBabymonster.addEventListener('click', function(){
    if (totalMovBabymonster > 0 ){
        movimentacaoBabymonster = movimentacaoBabymonster + 50;
        carroselBabymonster.style = `transform: translateX(${movimentacaoBabymonster}vw)`;

        totalMovBabymonster--
    }
})

/*========================================================================TXT========================================================================*/
const carroselTxt= document.querySelector('.div-movimentacao-txt');
const btnProxTxt = document.getElementById ('prox-btn-txt');
const btnAntTxt = document.getElementById ('antes-btn-txt');

let movimentacaoTxt = 0;
let totalMovTxt = 0;

/* avança */
btnProxTxt.addEventListener('click', function(){
    if (totalMovTxt <= 3){
        movimentacaoTxt = movimentacaoTxt - 50;
        carroselTxt.style = `transform: translateX(${movimentacaoTxt}vw)`;

        totalMovTxt++
    }
})

/* volta */ 
btnAntTxt.addEventListener('click', function(){
    if (totalMovTxt > 0 ){
        movimentacaoTxt = movimentacaoTxt + 50;
        carroselTxt.style = `transform: translateX(${movimentacaoTxt}vw)`;

        totalMovTxt--
    }
})

/*========================================================================RED VELVET========================================================================*/
const carroselRedvelvet = document.querySelector('.div-movimentacao-red-velvet');
const btnProxRedvelvet = document.getElementById ('prox-btn-red-velvet');
const btnAntRedvelvet = document.getElementById ('antes-btn-red-velvet');

let movimentacaoRedvelvet = 0;
let totalMovRedvelvet = 0;

/* avança */
btnProxRedvelvet.addEventListener('click', function(){
    if (totalMovRedvelvet <= 3){
        movimentacaoRedvelvet = movimentacaoRedvelvet - 50;
        carroselRedvelvet.style = `transform: translateX(${movimentacaoRedvelvet}vw)`;

        totalMovRedvelvet++
    }
})

/* volta */ 
btnAntRedvelvet.addEventListener('click', function(){
    if (totalMovRedvelvet > 0 ){
        movimentacaoRedvelvet = movimentacaoRedvelvet + 50;
        carroselRedvelvet.style = `transform: translateX(${movimentacaoRedvelvet}vw)`;

        totalMovRedvelvet--
    }
})

/*========================================================================RED VELVET========================================================================*/
const carroselGidle = document.querySelector('.div-movimentacao-gidle');
const btnProxGidle = document.getElementById ('prox-btn-gidle');
const btnAntGidle = document.getElementById ('antes-btn-gidle');

let movimentacaoGidle = 0;
let totalMovGidle = 0;

/* avança */
btnProxGidle.addEventListener('click', function(){
    if (totalMovGidle <= 3){
        movimentacaoGidle = movimentacaoGidle - 50;
        carroselGidle.style = `transform: translateX(${movimentacaoGidle}vw)`;

        totalMovGidle++
    }
})

/* volta */ 
btnAntGidle.addEventListener('click', function(){
    if (totalMovGidle > 0 ){
        movimentacaoGidle = movimentacaoGidle + 50;
        carroselGidle.style = `transform: translateX(${movimentacaoGidle}vw)`;

        totalMovGidle--
    }
})








