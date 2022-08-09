/*Formatação do RG*/
let rg = document.getElementById('rglocador')
rg.addEventListener('keypress', function(e) {
    let rglen = rg.value.length
    if(!fnum(e)){
        e.preventDefault()
    }else if(rglen == 2  || rglen == 6){
        rg.value += '.'
    }    
})
let rg1 = document.getElementById('rglocatario1')
rg1.addEventListener('keypress', function(e){
    let rg1len = rg1.value.length
    if(!fnum(e)){
        e.preventDefault()
    }else if(rg1len == 2 || rg1len == 6){
        rg1.value += '.'
    }
})
let rg2 = document.getElementById('rglocatario2')
rg2.addEventListener('keypress', function(e){
    let rg2len = rg2.value.length
    if(!fnum(e)){
        e.preventDefault()
    }else if(rg2len == 2 || rg2len == 6){
        rg2.value += '.'
    }
})
/*Formação do CPF*/ 
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
let cpf1 = document.getElementById('cpflocatario1')
cpf1.addEventListener('keypress', function(e){
    let cpflen = cpf1.value.length
    if(!fnum(e)){
        e.preventDefault()
    }
    else if(cpflen == 3 || cpflen == 7){
        cpf1.value += '.'
    }else if(cpflen == 11){
        cpf1.value += '-'
    }
})
let cpf2 = document.getElementById('cpflocatario2')
cpf2.addEventListener('keypress', function(e){
    let cpflen = cpf2.value.length
    if(!fnum(e)){
        e.preventDefault()
    }
    else if(cpflen == 3 || cpflen == 7){
        cpf2.value += '.'
    }else if(cpflen == 11){
        cpf2.value += '-'
    }
})
/*Formação do CEP*/
let cep1 = document.querySelector('input.cep1')
cep1.addEventListener('keypress', function(e){
    let ceplen = cep1.value.length
    if(!fnum(e)){
        e.preventDefault()
    }else if(ceplen == 2){
        cep1.value += '.'
    }else if(ceplen == 6){
        cep1.value += '-'
    }
})
let cep2 = document.querySelector('input.cep2')
cep2.addEventListener('keypress', function(e){
    let cep2len = cep2.value.length
    if(!fnum(e)){
        e.preventDefault()
    }else if(cep2len == 2){
        cep2.value += '.'
    }else if(cep2len == 6){
        cep2.value += '-'
    }
})
let cepimovel = document.querySelector('input.cepimovel')
cepimovel.addEventListener('keypress', function(e){
    let cepilen = cepimovel.value.length
    if(!fnum(e)){
        e.preventDefault()
    }else if(cepilen == 2){
        cepimovel.value += '.'
    }else if(cepilen == 6){
        cepimovel.value += '-'
    }
})
/*Formação CONTATO*/
let ddd1 = document.querySelector('input.ddd1')
ddd1.addEventListener('keypress', function(e){
    if(!fnum(e)){
        e.preventDefault()
    }
})
let contato1 = document.querySelector('input.contato1')
contato1.addEventListener('keypress', function(e){
    let contatolen = contato1.value.length
    if(!fnum(e)){
        e.preventDefault()
    }else if(contatolen == 5){
        contato1.value += '-'
    }
})
let ddd2 = document.querySelector('input.ddd2')
ddd2.addEventListener('keypress', function(e){
    if(!fnum(e)){
        e.preventDefault()
    }
})
let contato2 = document.querySelector('input.contato2')
contato2.addEventListener('keypress', function(e){
    let contatolen = contato2.value.length
    if(!fnum(e)){
        e.preventDefault()
    }else if(contatolen == 5){
        contato2.value += '-'
    }
})
/*Formatação só numero*/
function fnum(e){
    const char = String.fromCharCode(e.keyCode)
    const pattern = '[0-9]'
    if(char.match(pattern)){
        return true
    }
}
/*Inserindo dados no documento*/
function doc(){

    /*DADOS LOCADOR*/

    let nome_locador = document.getElementById('locador')
    let rg_locador = document.getElementById('rglocador')

    let locadortx = document.querySelectorAll('.locadortx')
    locadortx.forEach(ele => {
        ele.textContent = `${nome_locador.value}`.toUpperCase()
    })
    let rgtx = document.querySelectorAll('.rglocador')
    rg_locador.forEach(ele => {
        ele.textContent = `${rg_locador.value}`
    })
    
}
