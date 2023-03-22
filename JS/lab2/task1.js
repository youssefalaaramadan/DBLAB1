var nm = /^[a-z]+$/;
var ph = /^[0-9]{8}$/;
var mob = /^(010|011|012)[0-9]{11}$/;
var ml =  /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
do{
    var namee = prompt("Enter your name")
}while(! namee.match(nm));

do{
    var phone = prompt("Enter your phone number")
}while(! phone.match(ph));
do{
    var mobile = prompt("Enter your mobile number")
}while(! mobile.match(mob));
do{
    var email = prompt("Enter your e-mail address")
}while(! email.match(ml));

console.log(namee,phone,mobile,email);

document.write("name= " + namee,"<br>", " Phone Number = " + phone,"<br>" + " Mobile Number = " + mobile,"<br>" + " Your Email address = " + email);
