

/*DATA*/
let data = new Date()
let mes_atual = data.getMonth()


switch(mes_atual){
    case(0):
        mes_atual = 'janeiro'
        break
    case(1):
        mes_atual = 'fervereiro'
        break
    case(2):
        mes_atual = 'março'
        break
    case(3):
        mes_atual = 'abril'
        break
    case(4):
        mes_atual = 'maio'
        break
    case(5):
        mes_atual = 'junho'
        break
    case(6):
        mes_atual = 'julho'
        break
    case(7):
        mes_atual = 'agosto'
        break
    case(8):
        mes_atual = 'setembro'
        break
    case(9):
        mes_atual = 'outubro'
        break
    case(10):
        mes_atual = 'novembro'
        break
    case(11):
        mes_atual = 'dezembro'
        break
    
}
let dia_atualtx =  document.querySelectorAll('#dia')
let mes_atualtx = document.querySelectorAll('#mes')
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

/*Inserindo dados no documento*/

function doc (){

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
    let cidade_locatario1 = document.getElementById('cidadelocatario1')
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
    let cidade_locatario2 = document.getElementById('cidadelocatario2')
    let cep_locatario2 = document.getElementById('ceplocatario2')
    let ddd_locatario2 = document.getElementById('dddlocatario2')
    let contato_locatario2 = document.getElementById('contatolocatario2')
    let imail_locatario2 = document.getElementById('imaillocatario2')

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
    let casadolocatario2 = document.getElementById('casadolocatario1')
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

    let locadortx = document.querySelectorAll('.locadortx')
    locadortx.forEach(ele => {
        ele.textContent = `${nome_locador.value}`.toUpperCase()
    })
    let rgtx = document.querySelectorAll('.rglocador')
    rgtx.forEach(ele => {
        ele.textContent = `${rg_locador.value}`
    })
    let ogtx_locador = document.querySelectorAll('.oglocador')
    ogtx_locador.forEach(ele => {
        ele.textContent = `${orgao_locador.value}`.toUpperCase()
    })
    let localtx_locador = document.querySelectorAll('.locallocador')
    localtx_locador.forEach(ele => {
        ele.textContent = `${local_locador.value}`.toUpperCase()
    })
    let cpftx_locador = document.querySelectorAll('.cpflocador')
    cpftx_locador.forEach(ele => {
        ele.textContent = `${cpf_locador.value}`
    })
    let nacionalidadetx_locador = document.querySelectorAll('.nacionalidadelocador')
    nacionalidadetx_locador.forEach(ele => {
        ele.textContent = `${nacionalidade_locador.value}`
    })
    let profissaotx_locador = document.querySelectorAll('.profissaolocador')
    profissaotx_locador.forEach(ele => {
        ele.textContent = `${profissao_locador.value}`
    })
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
    nometx_locatario1.forEach(ele => {
        ele.textContent = `${nome_locatario1.value}`
    })
    let rgtx_locatario1 = document.querySelectorAll('.rglocatario1')
    rgtx_locatario1.forEach(ele => {
        ele.textContent = `${rg_locatario1.value}`
    })
    let ogtx_locatario1 = document.querySelectorAll('.orgaolocatario1')
    ogtx_locatario1.forEach(ele => {
        ele.textContent = `${orgao_locatario1.value}`.toUpperCase()
    })
    let localtx_locatario1 = document.querySelectorAll('.locallocatario1')
    localtx_locatario1.forEach(ele => {
        ele.textContent = `${local_locatario1.value}`.toUpperCase()
    })
    let cpftx_locatario1 = document.querySelectorAll('.cpflocatario1')
    cpftx_locatario1.forEach(ele => {
        ele.textContent = `${cpf_locatario1.value}`
    })
    let nacionalidadetx_locatario1 = document.querySelectorAll('.nacionalidadelocatario1')
    nacionalidadetx_locatario1.forEach(ele => {
        ele.textContent = `${nacionalidade_locatario1.value}`
    })
    let profissaotx_locatario1 = document.querySelectorAll('.profissaolocatario1')
    profissaotx_locatario1.forEach(ele => {
        ele.textContent = `${profissao_locatario1.value}`
    })
    let ruatx_locatario1 = document.querySelectorAll('.rualocatario1')
    ruatx_locatario1.forEach(ele => {
        ele.textContent = `${rua_locatario1.value}`
    })
    let numerotx_locatario1 = document.querySelectorAll('.numerolocatario1')
    numerotx_locatario1.forEach(ele => {
        ele.textContent = `${numero_locatario1.value}`
    })
    if(complemento_locatario1.value.length > "0"){
        let complementotx_locatario1 = document.querySelectorAll('.residencialocatario1')
        complementotx_locatario1.forEach(ele => {
            ele.textContent = `, ${complemento_locatario1.value}`
        })
    }
    
    let cidadetx_locatario1 = document.querySelectorAll('.cidadelocatario1')
    cidadetx_locatario1.forEach(ele => {
        ele.textContent = `${cidade_locatario1.value}`
    })
    let ceptx_locatario1 = document.querySelectorAll('.ceplocatario1')
    ceptx_locatario1.forEach(ele => {
        ele.textContent = `${cep_locatario1.value}`
    })
    let dddtx_locatario1 = document.querySelectorAll('.dddlocatario1')
    dddtx_locatario1.forEach(ele => {
        ele.textContent = `${ddd_locatario1.value}`
    })
    let contatotx_locatario1 = document.querySelectorAll('.contatolocatario1')
    contatotx_locatario1.forEach(ele => {
        ele.textContent = `${contato_locatario1.value}`
    })
    if(imail_locatario1.value.length > "0"){
        let imailtx_locatario1 = document.querySelectorAll('.imaillocatario1')
        imailtx_locatario1.forEach(ele => {
            ele.textContent = ` / ${imail_locatario1.value}`
        })
    }
    
    let estadociviltx_locatario1 = document.querySelectorAll('.estadocivillocatario1')
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
    nometx_locatario2.forEach(ele => {
        ele.textContent = `${nome_locatario2.value}`
    })
    let rgtx_locatario2 = document.querySelectorAll('.rglocatario2')
    rgtx_locatario2.forEach(ele => {
        ele.textContent = `${rg_locatario2.value}`
    })
    let ogtx_locatario2 = document.querySelectorAll('.orgaolocatario2')
    ogtx_locatario2.forEach(ele => {
        ele.textContent = `${orgao_locatario2.value}`.toUpperCase()
    })
    let localtx_locatario2 = document.querySelectorAll('.locallocatario2')
    localtx_locatario2.forEach(ele => {
        ele.textContent = `${local_locatario2.value}`.toUpperCase()
    })
    let cpftx_locatario2 = document.querySelectorAll('.cpflocatario2')
    cpftx_locatario2.forEach(ele => {
        ele.textContent = `${cpf_locatario2.value}`
    })
    let nacionalidadetx_locatario2 = document.querySelectorAll('.nacionalidadelocatario2')
    nacionalidadetx_locatario2.forEach(ele => {
        ele.textContent = `${nacionalidade_locatario2.value}`
    })
    let profissaotx_locatario2 = document.querySelectorAll('.profissaolocatario2')
    profissaotx_locatario2.forEach(ele => {
        ele.textContent = `${profissao_locatario2.value}`
    })
    let ruatx_locatario2 = document.querySelectorAll('.rualocatario2')
    ruatx_locatario2.forEach(ele => {
        ele.textContent = `${rua_locatario2.value}`
    })
    let numerotx_locatario2 = document.querySelectorAll('.numerolocatario2')
    numerotx_locatario2.forEach(ele => {
        ele.textContent = `${numero_locatario2.value}`
    })
    if(complemento_locatario2.value.length > "0"){
        let complementotx_locatario2 = document.querySelectorAll('.residencialocatario2')
        complementotx_locatario2.forEach(ele => {
            ele.textContent = `, ${complemento_locatario2.value}`
        })
    }
    
    let cidadetx_locatario2 = document.querySelectorAll('.cidadelocatario2')
    cidadetx_locatario2.forEach(ele => {
        ele.textContent = `${cidade_locatario2.value}`
    })
    let ceptx_locatario2 = document.querySelectorAll('.ceplocatario2')
    ceptx_locatario2.forEach(ele => {
        ele.textContent = `${cep_locatario2.value}`
    })
    let dddtx_locatario2 = document.querySelectorAll('.dddlocatario2')
    dddtx_locatario2.forEach(ele => {
        ele.textContent = `${ddd_locatario2.value}`
    })
    let contatotx_locatario2 = document.querySelectorAll('.contatolocatario2')
    contatotx_locatario2.forEach(ele => {
        ele.textContent = `${contato_locatario2.value}`
    })
    if(imail_locatario2.value.length > "0"){
        let imailtx_locatario2 = document.querySelectorAll('.imaillocatario2')
        imailtx_locatario2.forEach(ele => {
            ele.textContent = ` / ${imail_locatario2.value}`
        })
    }
    
    let estadociviltx_locatario2 = document.querySelectorAll('.estadocivillocatario2')
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

    residencial_imoveltx.forEach(ele => {
        ele.textContent = `${residencial_imovel.value}`
    })
    bloco_imoveltx.forEach(ele => {
        ele.textContent = `${bloco_imovel.value}`
    })
    apartamento_imoveltx.forEach(ele => {
        ele.textContent = `${apartamento_imovel.value}`
    })
    rua_imoveltx.forEach(ele => {
        ele.textContent = `${rua_imovel.value}`
    })
    numero_imoveltx.forEach(ele => {
        ele.textContent = `${numero_imovel.value}`
    })
    bairro_imoveltx.forEach(ele => {
        ele.textContent = `${bairro_imovel.value}`
    })
    cidade_imoveltx.forEach(ele => {
        ele.textContent = `${cidade_imovel.value}`
    })
    estado_imoveltx.forEach(ele => {
        ele.textContent = `${estado_imovel.value}`
    })
    cep_imoveltx.forEach(ele => {
        ele.textContent = `${cep_imovel.value}`
    })

    /*Dados do PRAZO DE LOCAÇÃO*/

    let prazo_locaçao = document.getElementById('prazodelocaçao')
    let prazo_locacaçoescrito = document.getElementById('prazodelocaçaoescrito')
    let dia_prazo_inicio = document.getElementById('diadoprazoin')
    let mes_prazo_inicio = document.getElementById('mesdoprazoin')
    let ano_prazo_inicio = document.getElementById('anodoprazoin')
    let dia_prazo_fim = document.getElementById('diadoprazofim')
    let mes_prazo_fim = document.getElementById('mesdoprazofim')
    let ano_prazo_fim = document.getElementById('anodoprazofim')

    /*Preenchendo PRAZO DE LOCAÇÃO*/
    let prazo_locaçaotx = document.querySelectorAll('.prazodelocaçao')
    let prazo_locacaçoescritotx = document.querySelectorAll('.prazodelocaçaoescrito')
    let dia_prazo_iniciotx = document.querySelectorAll('.diadoprazoin')
    let mes_prazo_iniciotx = document.querySelectorAll('.mesdoprazoin')
    let ano_prazo_iniciotx = document.querySelectorAll('.anodoprazoin')
    let dia_prazo_fimtx = document.querySelectorAll('.diadoprazofim')
    let mes_prazo_fimtx = document.querySelectorAll('.mesdoprazofim')
    let ano_prazo_fimtx = document.querySelectorAll('.anodoprazofim')

    prazo_locaçaotx.forEach(ele => {
        ele.textContent = `${prazo_locaçao.value}`
    })
    prazo_locacaçoescritotx.forEach(ele => {
        ele.textContent = `${prazo_locacaçoescrito.value}`
    })
    dia_prazo_iniciotx.forEach(ele => {
        ele.textContent = `${dia_prazo_inicio.value}`
    })
    mes_prazo_iniciotx.forEach(ele => {
        ele.textContent = `${mes_prazo_inicio.value}`
    })
    ano_prazo_iniciotx.forEach(ele => {
        ele.textContent = `${ano_prazo_inicio.value}`
    })
    dia_prazo_fimtx.forEach(ele => {
        ele.textContent = `${dia_prazo_fim.value}`
    })
    mes_prazo_fimtx.forEach(ele => {
        ele.textContent = `${mes_prazo_fim.value}`
    })
    ano_prazo_fimtx.forEach(ele => {
        ele.textContent = `${ano_prazo_fim.value}`
    })

    /*Formatação do prazo data só numeros*/

    let mes_atualnumeroin = document.querySelectorAll('.mesdoprazonumin')
    let mes_atualnumerofim = document.querySelectorAll('.mesdoprazonumfim')
    let meses = ['janeiro', 'fervereiro', 'março', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro']
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

    
    

    
