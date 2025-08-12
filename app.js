// Simple JS for menu toggle and form feedback
document.addEventListener('DOMContentLoaded', function(){
  const menuBtn = document.getElementById('menuBtn');
  menuBtn && menuBtn.addEventListener('click', function(){
    alert('Mobiel menu: voeg hier je eigen navigatie toe of implementeer een drawer.');
  });

  const form = document.getElementById('contactForm');
  const status = document.getElementById('formStatus');
  form && form.addEventListener('submit', function(e){
    status.textContent = 'Versturen...';
    // Let the form submit normally to contact_send.php (server-side)
  });
});
