/*Formatação dos input*/
let rg = document.getElementById('rglocador')
rg.addEventListener('keypress', function(e) {
    let rglen = rg.value.length
    if(!fnum(e)){
        e.preventDefault()
    }else if(rglen == 2  || rglen == 6){
        rg.value += '.'
    }    
}
)
let cpf = document.getElementById('cpflocador')
cpf.addEventListener('keypress', function(e){
    let cpflen = cpf.value.length
    if(!fnum(e)){
        e.preventDefault()
    }
    else if(cpflen == 3 || cpflen == 7){
        cpf.value += '.'
    }else if(cpflen == 11){
        cpf.value += '-'
    }
})
function fnum(e){
    const char = String.fromCharCode(e.keyCode)
    const pattern = '[0-9]'
    if(char.match(pattern)){
        return true
    }
}
