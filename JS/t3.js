var name = /^[A-Za-z]+$/;
var age = /^[0-9]{<2010}$/;

do{
     var namee = prompt("enter your name?");
}while(! namee.match (name));
do{
    var agee = prompt("enter your birth year");
}while(! agee.match (age));
var x = 2023-agee;
console.log(namee,agee,x);
document.write("Name= " + namee , <br> "Birth Date= " + agee , <br> "Age= " + x );
