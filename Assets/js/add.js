var campo1 = document.getElementById('tre1');
var campo2 = document.getElementById('ser1');
var campo3 = document.getElementById('rep1');

function add(){
  campo1.appendChild(createMyElement('treino[]'))
  campo2.appendChild(createMyElement('serie[]'))
  campo3.appendChild(createMyElement('repeticao[]'))
}

function createMyElement(name) {
  html = document.createElement('input')
  html.setAttribute('name', name)
  html.setAttribute('type', 'text')
  html.classList.add('w-100')
  html.classList.add('mb-2')

  return html
}