function fizzBuzz(n) {
    
    /*let hold = n - (n -1)
    for(let i = 1; i < n +1; i++ ){
    if(hold % 15 == 0) console.log('Fizzbuzz');
    else if(hold % 3 == 0) console.log('Fizz');
    else if(hold % 5 == 0)console.log('Buzz');
    else console.log(i)
    hold++;
    }*/
    
    for(let i = 1; i <= n; i++){
        if(i % 3 === 0 && i % 5 === 0){
            console.log('FizzBuzz');
        }else if(i % 3 === 0){
            console.log('Fizz');
        }else if(i % 5 === 0){
            console.log('Buzz');
        }else{
            console.log(i);
        }
    }

}