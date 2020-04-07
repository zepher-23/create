function myFunction(x) {
    x.classList.toggle("change");
  }
  (function() {

    var nav = $('nav'),
      menu = $('nav h1'),
      main = $('main'),
      open = false,
      hover = false;
  
    menu.on('click', function() {
      open = !open ? true : false;
      nav.toggleClass('menu-active');
      main.toggleClass('menu-active');
      nav.removeClass('menu-hover');
      main.removeClass('menu-hover');
      console.log(open);
    });
    menu.hover( 
      function() {
        if (!open) {
          nav.addClass('menu-hover');
          main.addClass('menu-hover');
        }
      }, function() {
        nav.removeClass('menu-hover');
        main.removeClass('menu-hover');
      }
    );
  
  })();
  
  //MODAL 
  var modal = document.getElementById("myModal");
var selector1=document.getElementById("graphic");
var selector2=document.getElementById("web");
var selector3=document.getElementById("marketing");
var selector4=document.getElementById("video");
var selector5=document.getElementById("3d");
var selector6=document.getElementById("app");


// Get the button that opens the modal
var btn1 = document.getElementById("myBtn1");
var btn2 = document.getElementById("myBtn2");
var btn3 = document.getElementById("myBtn3");
var btn4 = document.getElementById("myBtn4");
var btn5 = document.getElementById("myBtn5");
var btn6 = document.getElementById("myBtn6");


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn1.onclick = function() {
  modal.style.display = "block";
  selector1.style.display="block";
}

btn2.onclick = function() {
  modal.style.display = "block";
  selector2.style.display="block";
}

btn3.onclick = function() {
  modal.style.display = "block";
  selector3.style.display="block";
}

btn4.onclick = function() {
  modal.style.display = "block";
  selector4.style.display="block";
}

btn5.onclick = function() {
  modal.style.display = "block";
  selector5.style.display="block";
}
btn6.onclick = function() {
  modal.style.display = "block";
  selector6.style.display="block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
  selector1.style.display="none";
  selector2.style.display="none";
  selector3.style.display="none";
  selector4.style.display="none";
  selector5.style.display="none";
  selector6.style.display="none";

}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
    selector1.style.display="none";
    selector2.style.display="none";
    selector3.style.display="none";
    selector4.style.display="none";
    selector5.style.display="none";
    selector6.style.display="none";

  }
}
//slider

var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  if(slider.value<1000){
   var sub = slider.value%100;
   var result = slider.value-sub;
   

  }
  else if(slider.value<10000){
    var sub = slider.value%100;
   var result = slider.value-sub;
  }
  else{
    var sub = slider.value%1000;
   var result = slider.value-sub;
  }
  
  output.innerHTML = result;
}
//signup///////////////////////////////////////////////////
var mod = document.getElementById('id01');
var mod1 = document.getElementById('id02')

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == mod ) {
    mod.style.display = "none";
  }
  else if (event.target == mod1 ) {
    mod1.style.display = "none";
  }
  else if(event.target==modal){
modal.style.display = "none";
    selector1.style.display="none";
    selector2.style.display="none";
    selector3.style.display="none";
    selector4.style.display="none";
    selector5.style.display="none";
    selector6.style.display="none";
  }
}
  

////////////////text-rotate/////////////////



var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);
};
function checkPass(form) { 
  password1 = form.psw.value; 
  password2 = form.pswrepeat.value; 

  console.log("variables set");
  
        
  
        
  // If Not same return False.     
  if (password1 != password2) { 
      alert ("\nPassword did not match: Please try again...") 

      return false; 
  } 

  
} 