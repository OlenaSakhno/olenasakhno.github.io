//task 1

let btnForm = document.querySelector("#varform button");
btnForm.onclick = function(){
let form = document.querySelector("#varform");
let a = form.a.value;
let b = form.b.value;
let c = form.c.value;
let d = b*b-4*a*c;

    document.querySelector("#solution").innerHTML="d="+d;
    
};

//task 2
let x = Math.round (Math.random()*10);  
let btnNum = document.querySelector(".task2 button");
btnNum.onclick = function(){
    let num = document.querySelector(".num").value;
if (x==num)
    document.querySelector("#answer").innerHTML="You guessed!";
   else if(x>num)
        document.querySelector("#answer").innerHTML="Too small";
    else  
         document.querySelector("#answer").innerHTML="Too big";
};




