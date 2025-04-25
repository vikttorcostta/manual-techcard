
function visualizarMenuLateral(){
    document.getElementById('menu-toggle').addEventListener('click', function() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('hidden');
    });
}

function toggleSubmenu()
{
    const toggleBtn = document.getElementById('toggle-submenu');
    const submenu = document.getElementById('submenu');

    if(toggleBtn && submenu)
    {
        toggleBtn.addEventListener('click', function(){
            submenu.classList.toggle('hidden');
        })
    }
}

toggleSubmenu();
visualizarMenuLateral();


