function exibirMenuLateral() {
  document.getElementById('sidebar').classList.toggle('hidden');
}

function highlightAtivo() {
  document.addEventListener('DOMContentLoaded', function () {
    const links = document.querySelectorAll('.sidebar-link');
    const sections = document.querySelectorAll('section[id], div[id]');

    function changeLinkState() {
      let index = sections.length;

      while (--index && window.scrollY + 100 < sections[index].offsetTop) { }

      links.forEach((link) => link.classList.remove('active-sidebar-link'));
      links[index].classList.add('active-sidebar-link');
    }

    changeLinkState();
    window.addEventListener('scroll', changeLinkState);
  });
}

highlightAtivo();

