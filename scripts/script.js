  // BEGIN GO TO TOP BUTTON
  const goToTop = document.getElementById("myBtn");
  
  goToTop.addEventListener('click', function(){
      window.scrollTo(0,0);
  });
  // END GO TO TOP BUTTON
  

  
  // BEGIN LOGIN MODAL
  let btnLogin = document.getElementsByClassName('button-login');
  let loginModal = document.getElementById('login-modal');
  let closeModal = document.getElementsByClassName('close-modal');

  
  btnLogin[0].addEventListener("click", function() {
    loginModal.style.display = "block";
  });

  closeModal[0].addEventListener("click", function(){
    loginModal.style.display ="none";
  })

  loginModal.addEventListener('click')
  // END LOGIN MODAL
  


  // BEGIN CALENDER

  


  // END CALENDER