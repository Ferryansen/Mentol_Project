var myDate = new Date();
var hour = myDate.getHours();

var greet;

if(hour < 12){
    greet = "Good Morning";
}
else if(hour >= 12 && hour < 18){
    greet = "Good Afternoon";
}
else if(hour >= 18){
    greet = "Good Evening";
}

document.getElementById("greetings").innerHTML = greet + ", Dear admin"