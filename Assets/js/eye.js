const senha = document.getElementById('senha');
const senha2 = document.getElementById('senha2');
const eye = document.getElementById('eye');
const eye2 = document.getElementById('eye2');

eye.onclick = () =>
{
    if (senha.type === 'password')
    {
        senha.type = 'text'
    }
    else{
        senha.type = 'password'
    }
}

eye2.onclick = () =>
{
    if (senha2.type === 'password')
    {
        senha2.type = 'text'
    }
    else{
        senha2.type = 'password'
    }
}


function teste(v){
    var campo1 = document.getElementById('div1');
    var campo2 = document.getElementById('div2');

    var link1 = document.getElementById('link1')
    var link2 = document.getElementById('link2')
    
    if (v == 1){
        campo1.classList.remove("d-none");
        campo2.classList.add("d-none");
        link1.classList.add("active");
        link2.classList.remove("active");
        link1.classList.add("fw-bold");
        link2.classList.remove("fw-bold");
    }
    else if (v == 2){
        campo2.classList.remove("d-none");
        campo1.classList.add("d-none");
        link1.classList.remove("active");
        link2.classList.add("active");
        link1.classList.remove("fw-bold");
        link2.classList.add("fw-bold");
    }
}