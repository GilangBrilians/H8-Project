let i = 100
while (i > 0) {
    if (i % 2 == 1){
        x = " "
        a = 0;
        while(a <= 100){
            x += "0" 
            a++;
        }
        console.log(x)
        i--;
    }
    else {
        console.log(" ")
        i--;
    }
}