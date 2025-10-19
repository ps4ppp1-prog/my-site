// Плавная прокрутка по якорям
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', e => {
      e.preventDefault();
      const target = document.querySelector(anchor.getAttribute('href'));
      if (target) target.scrollIntoView({ behavior: 'smooth' });
    });
  });
  
  // Отправка формы
  document.getElementById("contactForm").addEventListener("submit", async e => {
    e.preventDefault();
  
    const formData = new FormData(e.target);
    const response = await fetch("send_form.php", { method: "POST", body: formData });
    const result = await response.text();
  
    document.getElementById("formMessage").textContent = result;
    e.target.reset();
  });
  