var arr = [];
arr = arr.map(Number);
for(var i = 0; i < 5; i++){
   arr.push(prompt("Enter 5 numbers"));
}
console.log("Arrayofnumber"+arr);
(arr.sort(function(a,b){return a - b}));
document.write(arr);
document.write("<br>");
(arr.sort(function(a,b){return b - a}));

document.write(arr);
