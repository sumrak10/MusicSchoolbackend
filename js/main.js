document.addEventListener("DOMContentLoaded", () => {
    console.log("content loaded!")
    document.getElementsByClassName('burger')[0].addEventListener("click", (e) => {
        if (document.getElementsByClassName('menu')[0].style.display == "flex"){
            document.getElementsByClassName('burger')[0].classList.remove("burger-active")
            document.getElementsByClassName('menu')[0].style.display = "none"
            document.getElementsByClassName('menu')[0].classList.remove("resp-menu")
        }
        else {
            document.getElementsByClassName('burger')[0].classList.add("burger-active")
            document.getElementsByClassName('menu')[0].style.display = "flex"
            document.getElementsByClassName('menu')[0].classList.add("resp-menu")
        }
    })
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        var elements = document.querySelectorAll(".card");
        for (var i = 0; i < elements.length; i++) {
            elements[i].onclick = function(e){
                e.preventDefault()
                document.getElementsByClassName('front')[0].style.trasform = "rotateY(-180deg)"
                document.getElementsByClassName('back')[0].style.trasform = "rotateY(-360deg)"
            };
        }
    }
})
function send(){
    console.log("Отправка запроса");
    // event.preventDefault ? event.preventDefault() : event.returnValue = false;
    event.preventDefault();
    var req = new XMLHttpRequest();
    req.open('POST', 'send.php', true);
    req.onload = function() {
        if (req.status >= 200 && req.status < 400) {
        json = JSON.parse(this.response); //internet explorer 11
            console.log(json);
            if (json.result == "success") {
                alert("Сообщение отправлено");
            } else {
                alert("Ошибка. Сообщение не отправлено");
            }
        } else {alert("Ошибка сервера. Номер: "+req.status);}}; 
    req.onerror = function() {alert("Ошибка отправки запроса");};
    req.send(new FormData(event.target));
}