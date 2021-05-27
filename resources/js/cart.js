function makeAlphabetId(length) {
    var result = [];
    var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    var charactersLength = characters.length;
    for ( var i = 0; i < length; i++ ) {
      result.push(characters.charAt(Math.floor(Math.random() * charactersLength)));
   }
   return result.join('');
}

function makeIntegerId(length){
    var resulted = [];
    var chars = '0123456789';
    for(var i = 0; i < length; i++){
        resulted.push(chars.charAt(Math.floor(Math.random() * chars.length)));
    }
    return resulted.join('');
}

document.getElementById("invoice").innerHTML = "Invoice No. " + makeAlphabetId(2) + makeIntegerId(5)