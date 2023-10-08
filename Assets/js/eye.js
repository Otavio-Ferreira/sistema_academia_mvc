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