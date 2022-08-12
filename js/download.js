const fs = require('fs')

function leitorDeArquivo(caminho){
    fs.readFile(caminho, 'utf-8', function(error,data){
        if(error){
            console.log('erro de leitura: '+error.message)
        }else {
            console.log(data)
        }
    })
}
export default class down {
    nome_arquivo = '/../contratos/caução.doc'
    path = __dirname + `${nome_arquivo}`
    escritorDeArquivo(caminho,texto){
        fs.writeFile(caminho, texto, function(error){
            if(error){
                console.log('erro de escrita'+ error.message)
            }else {
                console.log('escreveu com sucesso em '+ caminho)
            }
        })
    }
}
 

escritorDeArquivo(path, 'merda')


