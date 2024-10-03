const sliders = document.querySelector('.slider');

function activate(e) {
  const items = document.querySelectorAll('.item');
  e.target.matches('.next') && sliders.append(items[0])
  e.target.matches('.prev') && sliders.prepend(items[items.length-1]);
}

document.addEventListener('click',activate,true);