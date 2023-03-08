var i = 0;
var txt = 'Hello! My name is Brigitta. I learn Programming languages e.g: Python, Laravel, PHP, CSS, HTML, JS, BOOTSTRAP. I am interested in frontend and backend development, Linux System and Ethical Hacking.';
var speed = 50;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("aboutme").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}