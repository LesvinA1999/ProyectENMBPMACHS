function fmrLogin(e){
    e.preventDefault();
    const user = document.getElementById("user");
    const passwd = document.getElementById("userpass");
    if (user.value == "") {

        passwd.classList.remove("is-invalid");
        user.classList.add("is-invalid");
        user.focus();

    }else if(passwd.value == ""){

        user.classList.remove("is-invalid")
        passwd.classList.add("is-invalid");
        passwd.focus();

    }else{
        const url = base_url + "Users/validate";
        const fmr = document.getElementById("fmrLogin");

        const http = new XMLHttpRequest();
        http.open("POST", url, true);
        http.send(new FormData(fmr));
        http.onreadystatechange = function (){
            if (this.readyState == 4 && this.status == 200) {
                const res = JSON.parse(this.responseText);
                if (res == "Ok") {
                    window.location = base_url + "Users";
                }else{
                    document.getElementById("alerta").classList.remove("d-none");
                    document.getElementById("alerta").innerHTML = res;
                }
            }
        }
    }
}