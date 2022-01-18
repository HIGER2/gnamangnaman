

function page() {
    

let tog1 = document.querySelector('#tog1');
    let tog2 = document.querySelector('#tog2');
    let tog4 = document.querySelector('#tog4');
    let tog5 = document.querySelector('#tog5');
    let projet= document.querySelector('#forprojet');
    let accueil = document.querySelector('#foraccueil');
  let contact = document.querySelector('#forcontact'); 
  let service = document.querySelector('#forservice'); 
  // content banner
 
  
  // end content bannner
    tog1.classList.add('active');
    projet.style.display = "none";
    contact.style.display = "none";
    service.style.display = "none";


    // content bannner
      // end content
    tog2.addEventListener('click', toggle2);
    tog1.addEventListener('click', toggle1);
    tog4.addEventListener('click', toggle4);
    tog5.addEventListener('click', toggle5);
   	function toggle2(){
   	tog1.classList.remove('active');
    tog5.classList.remove('active');
   	tog4.classList.remove('active');
        tog2.classList.add('active');
        projet.style.display = "block";
        accueil.style.display = "none";
        contact.style.display = "none";
        service.style.display = "none";
              

    }
    
   	function toggle1(){
            tog2.classList.remove('active');
            tog5.classList.remove('active');
            tog4.classList.remove('active');
              tog1.classList.add('active');
              projet.style.display="none";
              contact.style.display="none";
              service.style.display="none";
              accueil.style.display = "block";

              
   	}

    function toggle4(){
            tog4.classList.add('active');
            tog1.classList.remove('active');
            tog2.classList.remove('active');
            tog5.classList.remove('active');
            projet.style.display="none";
            contact.style.display="none";
            accueil.style.display="none";
            service.style.display = "block";

              
    }

    
    	function toggle5(){
            tog2.classList.remove('active');
            tog1.classList.remove('active');
            tog4.classList.remove('active');
              tog5.classList.add('active');
              projet.style.display="none";
              accueil.style.display = "none";
              service.style.display = "none";
              contact.style.display = "block";

              
  }
  
  // content banner function
  



}

page();