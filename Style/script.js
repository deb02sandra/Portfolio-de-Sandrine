document.getElementById('toggleSidebar').addEventListener('click', function () {
    const sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('collapsed');
  
    const main = document.querySelector('.main-content');
    if (sidebar.classList.contains('collapsed')) {
      main.style.marginLeft = '60px';
    } else {
      main.style.marginLeft = '220px';
    }
  });
  


 