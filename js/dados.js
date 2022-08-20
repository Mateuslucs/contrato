
/*DADOS LOCADOR*/

let nome_locador = document.getElementById('locador')
let rg_locador = document.getElementById('rglocador')
let orgao_locador = document.getElementById('oglocador')
let local_locador = document.getElementById('locallocador')
let cpf_locador = document.getElementById('cpflocador')
let nacionalidade_locador = document.getElementById('nacionalidadelocador')
let profissao_locador = document.getElementById('profissaolocador')

/*DADOS DO LOCATARIO 1*/

let nome_locatario1 = document.getElementById('locatario1')
let rg_locatario1 = document.getElementById('rglocatario1')
let orgao_locatario1 = document.getElementById('oglocatario1')
let local_locatario1 = document.getElementById('locallocatario1')
let cpf_locatario1 = document.getElementById('cpflocatario1')
let nacionalidade_locatario1 = document.getElementById('nacionalidadelocatario1')
let profissao_locatario1 = document.getElementById('profissaolocatario1')
let rua_locatario1 = document.getElementById('rualocatario1')
let numero_locatario1 = document.getElementById('numerolocatario1')
let complemento_locatario1 = document.getElementById('residenciallocatario1')
let bairro_locatario1 = document.getElementById('bairrolocatario1')
let cidade_locatario1 = document.getElementById('cidadelocatario1')
let estado_locatario1 = document.getElementById('estadolocatario1')
let cep_locatario1 = document.getElementById('ceplocatario1')
let ddd_locatario1 = document.getElementById('dddlocatario1')
let contato_locatario1 = document.getElementById('contatolocatario1')
let imail_locatario1 = document.getElementById('imaillocatario1')

/*DADOS DO LOCATARIO 2*/

let nome_locatario2 = document.getElementById('locatario2')
let rg_locatario2 = document.getElementById('rglocatario2')
let orgao_locatario2 = document.getElementById('oglocatario2')
let local_locatario2 = document.getElementById('locallocatario2')
let cpf_locatario2 = document.getElementById('cpflocatario2')
let nacionalidade_locatario2 = document.getElementById('nacionalidadelocatario2')
let profissao_locatario2 = document.getElementById('profissaolocatario2')
let rua_locatario2 = document.getElementById('rualocatario2')
let numero_locatario2 = document.getElementById('numerolocatario2')
let complemento_locatario2 = document.getElementById('residenciallocatario2')
let bairro_locatario2 = document.getElementById('bairrolocatario2')
let cidade_locatario2 = document.getElementById('cidadelocatario2')
let estado_locatario2 = document.getElementById('estadolocatario2')
let cep_locatario2 = document.getElementById('ceplocatario2')
let ddd_locatario2 = document.getElementById('dddlocatario2')
let contato_locatario2 = document.getElementById('contatolocatario2')
let imail_locatario2 = document.getElementById('imaillocatario2')

/*Dados do IMOVEL*/

let residencial_imovel = document.getElementById('residencia') 
let bloco_imovel = document.getElementById('bloco')
let apartamento_imovel = document.getElementById('apt')
let rua_imovel = document.getElementById('rua')
let numero_imovel = document.getElementById('numero')
let bairro_imovel = document.getElementById('bairro')
let cidade_imovel = document.getElementById('cidade')
let estado_imovel = document.getElementById('estado')
let cep_imovel = document.getElementById('cep')

/*DATA*/
let data = new Date()
let mes_atual = data.getMonth()
let meses = ['janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro']
for(var i = 0; i < meses.length; i++){
    switch(mes_atual){
        case(i):
        mes_atual = `${meses[i]}`
    }
}

let dia_atualtx =  document.querySelectorAll('.dia')
let mes_atualtx = document.querySelectorAll('.mes')
dia_atualtx.forEach(ele => {
    ele.textContent = `${data.getDate()}`
})
mes_atualtx.forEach(ele => {
    ele.textContent = `${mes_atual}`
})

/*Formatação só numero*/
function fnum(e){
    const char = String.fromCharCode(e.keyCode)
    const pattern = '[0-9]'
    if(char.match(pattern)){
        return true
    }
}

/*Formatação do RG*/


rg_locador.addEventListener('keypress', function(e) {
    let rglen = rg_locador.value.length
    if(!fnum(e)){
        e.preventDefault()
    }else if(rglen == 2  || rglen == 6){
        rg_locador.value += '.'
    }    
})
rg_locatario1.addEventListener('keypress', function(e){
    let rg1len = rg_locatario1.value.length
    if(!fnum(e)){
        e.preventDefault()
    }else if(rg1len == 2 || rg1len == 6){
        rg_locatario1.value += '.'
    }
})
rg_locatario2.addEventListener('keypress', function(e){
    let rg2len = rg_locatario2.value.length
    if(!fnum(e)){
        e.preventDefault()
    }else if(rg2len == 2 || rg2len == 6){
        rg_locatario2.value += '.'
    }
})

/*Formação do CPF*/

cpf_locador.addEventListener('keypress', function(e){
    let cpflen = cpf_locador.value.length
    if(!fnum(e)){
        e.preventDefault()
    }
    else if(cpflen == 3 || cpflen == 7){
        cpf_locador.value += '.'
    }else if(cpflen == 11){
        cpf_locador.value += '-'
    }
})
cpf_locatario1.addEventListener('keypress', function(e){
    let cpflen = cpf_locatario1.value.length
    if(!fnum(e)){
        e.preventDefault()
    }
    else if(cpflen == 3 || cpflen == 7){
        cpf_locatario1.value += '.'
    }else if(cpflen == 11){
        cpf_locatario1.value += '-'
    }
})
cpf_locatario2.addEventListener('keypress', function(e){
    let cpflen = cpf_locatario2.value.length
    if(!fnum(e)){
        e.preventDefault()
    }
    else if(cpflen == 3 || cpflen == 7){
        cpf_locatario2.value += '.'
    }else if(cpflen == 11){
        cpf_locatario2.value += '-'
    }
})
/*Formação do CEP*/
cep_locatario1.addEventListener('keypress', function(e){
    let ceplen = cep_locatario1.value.length
    if(!fnum(e)){
        e.preventDefault()
    }else if(ceplen == 2){
        cep_locatario1.value += '.'
    }else if(ceplen == 6){
        cep_locatario1.value += '-'
    }
})
cep_locatario2.addEventListener('keypress', function(e){
    let cep2len = cep_locatario2.value.length
    if(!fnum(e)){
        e.preventDefault()
    }else if(cep2len == 2){
        cep_locatario2.value += '.'
    }else if(cep2len == 6){
        cep_locatario2.value += '-'
    }
})
cep_imovel.addEventListener('keypress', function(e){
    let cepilen = cep_imovel.value.length
    if(!fnum(e)){
        e.preventDefault()
    }else if(cepilen == 2){
        cep_imovel.value += '.'
    }else if(cepilen == 6){
        cep_imovel.value += '-'
    }
})

/*Formação CONTATO*/

ddd_locatario1.addEventListener('keypress', function(e){
    if(!fnum(e)){
        e.preventDefault()
    }
})
contato_locatario1.addEventListener('keypress', function(e){
    let contatolen = contato_locatario1.value.length
    if(!fnum(e)){
        e.preventDefault()
    }else if(contatolen == 5){
        contato_locatario1.value += '-'
    }
})
ddd_locatario2.addEventListener('keypress', function(e){
    if(!fnum(e)){
        e.preventDefault()
    }
})
contato_locatario2.addEventListener('keypress', function(e){
    let contatolen = contato_locatario2.value.length
    if(!fnum(e)){
        e.preventDefault()
    }else if(contatolen == 5){
        contato_locatario2.value += '-'
    }
})

/*Inserindo dados no documento*/

function doc (){

    /*Verificando Estado civil LOCADOR*/
    let casadolocador = document.getElementById('casadolocador')
    let estadocivil_locador = ''
    if(casadolocador.checked){
        estadocivil_locador = 'Casado(a)'
    }else {
        estadocivil_locador = 'Solteiro(a)'
    }

    /*Verificando Estado civil LOCATARIO1*/
    let casadolocatario1 = document.getElementById('casadolocatario1')
    let estadocivil_locatario1 = ''
    if(casadolocatario1.checked){
        estadocivil_locatario1 = 'Casado(a)'
    }else {
        estadocivil_locatario1 = 'Solteiro(a)'
    }

    /*Verificando Estado civil LOCATARIO2*/
    let casadolocatario2 = document.getElementById('casadolocatario2')
    let estadocivil_locatario2 = ''
    if(casadolocatario2.checked){
        estadocivil_locatario2 = 'Casado(a)'
    }else {
        estadocivil_locatario2 = 'Solteiro(a)'
    }

    /*Verificando o sexo do LOCADOR*/
    let feminino_locador = document.getElementById('femininolocador')
    let sexo_locador = ''
    if(feminino_locador.checked){
        sexo_locador = 'feminino'
    }else {
        sexo_locador = 'masculino'
    }

    /*Verificando o sexo do LOCACATARIO1*/
    let feminino_locatario1 = document.getElementById('femininolocatario1')
    let sexo_locatario1 = ''
    if(feminino_locatario1.checked){
        sexo_locatario1 = 'feminino'
    }else {
        sexo_locatario1 = 'masculino'
    }
    
    /*Verificando o sexo do LOCACATARIO2*/
    let feminino_locatario2 = document.getElementById('femininolocatario2')
    let sexo_locatario2 = ''
    if(feminino_locatario2.checked){
        sexo_locatario2 = 'feminino'
    }else {
        sexo_locatario2 = 'masculino'
    }

    /*Preenchendo dados LOCADOR*/

    /*local onde vai preenchido*/
    let nometx_locador = document.querySelectorAll('.locadortx')
    let rgtx_locador = document.querySelectorAll('.rglocador')
    let ogtx_locador = document.querySelectorAll('.oglocador')
    let localtx_locador = document.querySelectorAll('.locallocador')
    let cpftx_locador = document.querySelectorAll('.cpflocador')
    let nacionalidadetx_locador = document.querySelectorAll('.nacionalidadelocador')
    let profissaotx_locador = document.querySelectorAll('.profissaolocador')

    let lista_locador = [nome_locador.value.toUpperCase(), rg_locador.value, orgao_locador.value.toUpperCase(), local_locador.value.toUpperCase(), cpf_locador.value, nacionalidade_locador.value, profissao_locador.value]

    let lista_locadortx = [nometx_locador, rgtx_locador, ogtx_locador, localtx_locador, cpftx_locador, nacionalidadetx_locador, profissaotx_locador]

    for(var i = 0; i < lista_locador.length; i++){
        lista_locadortx[i].forEach(ele => {
            ele.textContent = `${lista_locador[i]}`
        })
    }
    
    let estadociviltx_locador = document.querySelectorAll('.estadocivillocador')
    if(estadocivil_locador == 'Solteiro(a)'){
        estadociviltx_locador.forEach(ele => {
            ele.textContent = `Solteiro(a)`
        })
    }else {
        estadociviltx_locador.forEach(ele => {
            ele.textContent = 'Casado(a)'
        })
    }
    let sexotx_locador = document.querySelectorAll('.sexolocador')
    let sexoftx_locador = document.querySelectorAll('.sexoflocador')
    if(sexo_locador == 'feminino'){
        sexoftx_locador.forEach(ele => {
            ele.textContent = 'a'
        })
        sexotx_locador.forEach(ele => {
            ele.textContent = `a`
        })
    }else {
        sexotx_locador.forEach(ele => {
            ele.textContent = 'o'
        })
    }
    
    /*Preenchendo dados LOCATARIO1*/

    let nometx_locatario1 = document.querySelectorAll('.locatario1')
    let rgtx_locatario1 = document.querySelectorAll('.rglocatario1')
    let ogtx_locatario1 = document.querySelectorAll('.orgaolocatario1')
    let localtx_locatario1 = document.querySelectorAll('.locallocatario1')
    let cpftx_locatario1 = document.querySelectorAll('.cpflocatario1')
    let nacionalidadetx_locatario1 = document.querySelectorAll('.nacionalidadelocatario1')
    let profissaotx_locatario1 = document.querySelectorAll('.profissaolocatario1')
    let ruatx_locatario1 = document.querySelectorAll('.rualocatario1')
    let numerotx_locatario1 = document.querySelectorAll('.numerolocatario1')
    let bairrotx_locatario1 = document.querySelectorAll('.bairrolocatario1')
    let cidadetx_locatario1 = document.querySelectorAll('.cidadelocatario1')
    let estadotx_locatario1 = document.querySelectorAll('.estadolocatario1')
    let ceptx_locatario1 = document.querySelectorAll('.ceplocatario1')
    let dddtx_locatario1 = document.querySelectorAll('.dddlocatario1')
    let contatotx_locatario1 = document.querySelectorAll('.contatolocatario1')
    let complementotx_locatario1 = document.querySelectorAll('.residencialocatario1')
    let imailtx_locatario1 = document.querySelectorAll('.imaillocatario1')
    let estadociviltx_locatario1 = document.querySelectorAll('.estadocivillocatario1')

    let lista_locatario1 = [nome_locatario1.value.toUpperCase(), rg_locatario1.value, orgao_locatario1.value.toUpperCase(), local_locatario1.value.toUpperCase(), cpf_locatario1.value, nacionalidade_locatario1.value ,profissao_locatario1.value, rua_locatario1.value, numero_locatario1.value, complemento_locatario1.value,bairro_locatario1.value, cidade_locatario1.value,estado_locatario1.value.toUpperCase(), cep_locatario1.value, ddd_locatario1.value, contato_locatario1.value, imail_locatario1.value]

    let lista_locatario1tx = [nometx_locatario1, rgtx_locatario1, ogtx_locatario1, localtx_locatario1, cpftx_locatario1, nacionalidadetx_locatario1, profissaotx_locatario1, ruatx_locatario1, numerotx_locatario1, complementotx_locatario1,bairrotx_locatario1, cidadetx_locatario1, estadotx_locatario1, ceptx_locatario1, dddtx_locatario1, contatotx_locatario1, imailtx_locatario1]

    for(var i = 0; i < lista_locatario1.length; i++){
        lista_locatario1tx[i].forEach(ele => {
            ele.textContent = `${lista_locatario1[i]}`
        })
    }
    
    if(complemento_locatario1.value.length > "0"){
        complementotx_locatario1.forEach(ele => {
            ele.textContent = `, ${complemento_locatario1.value}`
        })
    }

    if(imail_locatario1.value.length > "0"){
        imailtx_locatario1.forEach(ele => {
            ele.textContent = ` / ${imail_locatario1.value}`
        })
    }
    
    if(estadocivil_locatario1 == 'Solteiro(a)'){
        estadociviltx_locatario1.forEach(ele => {
            ele.textContent = `Solteiro(a)`
        })
    }else {
        estadociviltx_locatario1.forEach(ele => {
            ele.textContent = 'Casado(a)'
        })
    }

    let sexotx_locatario1 = document.querySelectorAll('.sexolocatario1')
    let sexoftx_locatario1 = document.querySelectorAll('.sexoflocatario1')
    if(sexo_locatario1 == 'feminino'){
        sexoftx_locatario1.forEach(ele => {
            ele.textContent = 'a'
        })
        sexotx_locatario1.forEach(ele => {
            ele.textContent = `a`
        })
    }else {
        sexotx_locatario1.forEach(ele => {
            ele.textContent = 'o'
        })
    }

    /*Preenchendo dados LOCATARIO2*/

    let nometx_locatario2 = document.querySelectorAll('.locatario2')
    let rgtx_locatario2 = document.querySelectorAll('.rglocatario2')
    let ogtx_locatario2 = document.querySelectorAll('.orgaolocatario2')
    let localtx_locatario2 = document.querySelectorAll('.locallocatario2')
    let cpftx_locatario2 = document.querySelectorAll('.cpflocatario2')
    let nacionalidadetx_locatario2 = document.querySelectorAll('.nacionalidadelocatario2')
    let profissaotx_locatario2 = document.querySelectorAll('.profissaolocatario2')
    let ruatx_locatario2 = document.querySelectorAll('.rualocatario2')
    let numerotx_locatario2 = document.querySelectorAll('.numerolocatario2')
    let bairrotx_locatario2 = document.querySelectorAll('.bairrolocatario2')
    let cidadetx_locatario2 = document.querySelectorAll('.cidadelocatario2')
    let estadotx_locatario2 = document.querySelectorAll('.estadolocatario2')
    let ceptx_locatario2 = document.querySelectorAll('.ceplocatario2')
    let dddtx_locatario2 = document.querySelectorAll('.dddlocatario2')
    let contatotx_locatario2 = document.querySelectorAll('.contatolocatario2')
    let complementotx_locatario2 = document.querySelectorAll('.residencialocatario2')
    let imailtx_locatario2 = document.querySelectorAll('.imaillocatario2')
    let estadociviltx_locatario2 = document.querySelectorAll('.estadocivillocatario2')

    let lista_locatario2 = [nome_locatario2.value.toUpperCase(), rg_locatario2.value, orgao_locatario2.value.toUpperCase(), local_locatario2.value.toUpperCase(), cpf_locatario2.value, nacionalidade_locatario2.value ,profissao_locatario2.value, rua_locatario2.value, numero_locatario2.value, complemento_locatario2.value, bairro_locatario2.value, cidade_locatario2.value, estado_locatario2.value.toUpperCase(), cep_locatario2.value, ddd_locatario2.value, contato_locatario2.value, imail_locatario2.value]

    let lista_locatario2tx = [nometx_locatario2, rgtx_locatario2, ogtx_locatario2, localtx_locatario2, cpftx_locatario2, nacionalidadetx_locatario2, profissaotx_locatario2, ruatx_locatario2, numerotx_locatario2, complementotx_locatario2, bairrotx_locatario2, cidadetx_locatario2, estadotx_locatario2, ceptx_locatario2, dddtx_locatario2, contatotx_locatario2, imailtx_locatario2]

    for(var i = 0; i < lista_locatario2.length; i++){
        lista_locatario2tx[i].forEach(ele => {
            ele.textContent = `${lista_locatario2[i]}`
        })
    }
    
    if(complemento_locatario2.value.length > "0"){
        complementotx_locatario2.forEach(ele => {
            ele.textContent = `, ${complemento_locatario2.value}`
        })
    }
    if(imail_locatario2.value.length > "0"){
        imailtx_locatario2.forEach(ele => {
            ele.textContent = ` / ${imail_locatario2.value}`
        })
    }

    if(estadocivil_locatario2 == 'Solteiro(a)'){
        estadociviltx_locatario2.forEach(ele => {
            ele.textContent = `Solteiro(a)`
        })
    }else {
        estadociviltx_locatario2.forEach(ele => {
            ele.textContent = 'Casado(a)'
        })
    }
    let sexotx_locatario2 = document.querySelectorAll('.sexolocatario2')
    let sexoftx_locatario2 = document.querySelectorAll('.sexoflocatario2')
    if(sexo_locatario2 == 'feminino'){
        sexoftx_locatario2.forEach(ele => {
            ele.textContent = 'a'
        })
        sexotx_locatario2.forEach(ele => {
            ele.textContent = `a`
        })
    }else {
        sexotx_locatario2.forEach(ele => {
            ele.textContent = 'o'
        })
    }

    /*Formação da CAUÇÃO*/

    let caucao = document.getElementById('caucao')
    let caucao_escrito = document.getElementById('caucaoescrito')
    let caucaotx = document.querySelectorAll('.caucao')
    let caucao_escritotx = document.querySelectorAll('.caucaoescrito')

    caucaotx.forEach(ele => {
        ele.textContent = `${caucao.value}`
    })
    caucao_escritotx.forEach(ele => {
        ele.textContent = `${caucao_escrito.value}`
    })

   

    /*preenchendo dados do IMOVEL*/
    let residencial_imoveltx = document.querySelectorAll('.residencia')
    let bloco_imoveltx = document.querySelectorAll('.bloco')
    let apartamento_imoveltx = document.querySelectorAll('.apt')
    let rua_imoveltx = document.querySelectorAll('.rua')
    let numero_imoveltx = document.querySelectorAll('.numero')
    let bairro_imoveltx = document.querySelectorAll('.bairro')
    let cidade_imoveltx = document.querySelectorAll('.cidade')
    let estado_imoveltx = document.querySelectorAll('.estado')
    let cep_imoveltx = document.querySelectorAll('.cep')

    let lista_imovel = [residencial_imovel.value, bloco_imovel.value, apartamento_imovel.value, rua_imovel.value, numero_imovel.value, bairro_imovel.value, cidade_imovel.value, estado_imovel.value, cep_imovel.value]

    let lista_imoveltx = [residencial_imoveltx, bloco_imoveltx, apartamento_imoveltx, rua_imoveltx, numero_imoveltx, bairro_imoveltx, cidade_imoveltx, estado_imoveltx, cep_imoveltx]

    for(var i = 0; i < lista_imovel.length; i++){
        lista_imoveltx[i].forEach(ele => {
            ele.textContent = `${lista_imovel[i]}`
        })
    }

    /*Dados do PRAZO DE LOCAÇÃO*/

    let prazo_locaçao = document.getElementById('prazodelocaçao')
    let prazo_locacaçoescrito = document.getElementById('prazodelocaçaoescrito')
    let dia_prazo_inicio = document.getElementById('diadoprazoin')
    let dia_prazo_inicioEscrito = document.getElementById('diaprazoin_escrito')
    let mes_prazo_inicio = document.getElementById('mesdoprazoin')
    let ano_prazo_inicio = document.getElementById('anodoprazoin')
    let dia_prazo_fim = document.getElementById('diadoprazofim')
    let mes_prazo_fim = document.getElementById('mesdoprazofim') 
    let ano_prazo_fim = document.getElementById('anodoprazofim')
    let lista_prazo = [prazo_locaçao.value, prazo_locacaçoescrito.value, dia_prazo_inicio.value, dia_prazo_inicioEscrito.value, mes_prazo_inicio.value, ano_prazo_inicio.value, dia_prazo_fim.value, mes_prazo_fim.value, ano_prazo_fim.value]

    /*Preenchendo PRAZO DE LOCAÇÃO*/
    let prazo_locaçaotx = document.querySelectorAll('.prazodelocaçao')
    let prazo_locacaçoescritotx = document.querySelectorAll('.prazodelocaçaoescrito')
    let dia_prazo_iniciotx = document.querySelectorAll('.diadoprazoin')
    let dia_prazo_inicioEscritotx = document.querySelectorAll('.diaprazoin_escrito')
    let mes_prazo_iniciotx = document.querySelectorAll('.mesdoprazoin')
    let ano_prazo_iniciotx = document.querySelectorAll('.anodoprazoin')
    let dia_prazo_fimtx = document.querySelectorAll('.diadoprazofim')
    let mes_prazo_fimtx = document.querySelectorAll('.mesdoprazofim')
    let ano_prazo_fimtx = document.querySelectorAll('.anodoprazofim')
    let lista_prazotx = [prazo_locaçaotx, prazo_locacaçoescritotx, dia_prazo_iniciotx, dia_prazo_inicioEscritotx, mes_prazo_iniciotx, ano_prazo_iniciotx, dia_prazo_fimtx, mes_prazo_fimtx, ano_prazo_fimtx]

    for(var i = 0; i < lista_prazo.length; i++){
        lista_prazotx[i].forEach(ele => {
            ele.textContent = `${lista_prazo[i]}`
        })
    }
    
    /*Formatação do prazo data só numeros*/

    let mes_atualnumeroin = document.querySelectorAll('.mesdoprazonumin')
    let mes_atualnumerofim = document.querySelectorAll('.mesdoprazonumfim')
    
    for(var i = 0; i < meses.length; i++){
        if(i > 9){
            if(mes_prazo_inicio.value == meses[i]){
                mes_atualnumeroin.forEach(ele => {
                    ele.textContent = `${i+1}`
                })
            }
            if(mes_prazo_fim.value == meses[i]){
                mes_atualnumerofim.forEach(ele => {
                    ele.textContent = `${i+1}`
                })
            }
        }else{
            if(mes_prazo_inicio.value == meses[i]){
                mes_atualnumeroin.forEach(ele => {
                    ele.textContent = `0${i+1}`
                })
            }
            if(mes_prazo_fim.value == meses[i]){
                mes_atualnumerofim.forEach(ele => {
                    ele.textContent = `0${i+1}`
                })
            }
        }
        
    }

    /*Dados do ALUGUEL MENSAL*/

    let valor_aluguel = document.getElementById('valor')
    let valor_aluguelescrito = document.getElementById('valorescrito')
    let valor_alugueltx = document.querySelectorAll('.valor')
    let valor_aluguelescritotx = document.querySelectorAll('.valorescrito')

    valor_alugueltx.forEach(ele => {
        ele.textContent = `${valor_aluguel.value}`
    })
    valor_aluguelescritotx.forEach(ele => {
        ele.textContent = `${valor_aluguelescrito.value}`
    })  
}
