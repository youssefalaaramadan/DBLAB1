var nm = /^[a-z]+$/;
var ph = /^[0-2010]{4}$/;
do{
    var namee = prompt("Enter your name")
}while(! namee.match(nm));

do{
    var phone = prompt("Enter your birth year")
}while( phone.match(ph));
console.log(namee,phone);
var age = 2023 - phone;
document.write("name= " + namee,"<br>", " Birth date = " + phone,"<br>" + " Age = " + age);
