function factorial(v) {
    var fact = v;

    if(v == 0 || v == 1) return 1;

    while(v > 1){
        v--;
        fact = fact * v;
    }
    return fact;
}

function poweroftwo(n){
    var result = 1;
    for(var i=0; i<n; i++){
        result = result * 2;
    }
    return result;
}