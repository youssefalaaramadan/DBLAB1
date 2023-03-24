document.write("<h1 style='text-align:center;color:grey'>To-do List</h1>");
document.body.style.backgroundColor = 'lightgrey';
var div1 = document.getElementsByClassName('div1')[0];

function add(){
    var inp = document.querySelector("div+input[type='text']").value;
console.log(inp);
var empty = document.querySelector(".empty");
console.log("test"+empty);
//empty.innerText = inp;
empty.style.backgroundColor = 'lightblue'
empty.innerHTML += "<h1>" + inp +"</h1>"
empty.innerHTML += "<h1>" + inp +"</h1>"
}
var parent = document.querySelector(".parent");
console.log(parent);
var created = document.createElement("h2");
created.setAttribute("class","elemStyle");
parent.appendChild(created)

var created; 
function add() {
    list.classList.add("elemStyle");
    var parent = document.querySelector(".parent");
console.log(parent);
var created = document.createElement("h2");
created.innerText = "created sometime ago";
created.setAttribute("class","elemStyle");
parent.appendChild(created)
}

function remove() {
    list.classList.remove("elemStyle");
    created.remove();
}