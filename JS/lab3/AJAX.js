var xhr = new XMLHttpRequest();
xhr.open("GET","https://jsonplaceholder.typicode.com/todos");
xhr.send("");
xhr.onreadystatechange = function(){
    if(xhr.readyState ===4 && xhr.status === 200){
console.log(xhr.responseText);
    }else{
        console.log("error")
    }
}
