<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://cdnjs.clou  dflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" >
      <link href="/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" /> 
  <link href="css/asset/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" /> 
 

    <title>GNAMANGNAMAN</title>
</head>
<body>
        <nav class="cc-navbar navbar navbar-expand-lg navbar-dark bg-dark position-fixed w-100 ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="logo/logo.png"  alt="" class="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mb-2 ms-auto  mb-lg-0 g-4 me-4">
                <li class="nav-item" >
                <a class="nav-link" aria-current="page" href="#" id="tog1">Accueil  <i class="fas fa-home"></i></a> 
                </li>
                <li class="nav-item" >
                <a class="nav-link" href="#" id="tog2">Projet <i class="fas fa-tasks"></i></a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="#">Ouvrages <i class="fas fa-book-open"></i></a>
                </li>

                <li class="nav-item">
                     <a class="nav-link" href="#"  id="tog4">Services<i class="fab fa-servicestack"></i></a>
                </li>

                  <li class="nav-item">
                     <a class="nav-link" href="#" id="tog5">Contacts<i class="fas fa-id-card-alt"></i></a>
                </li>
                
               
            </ul>
            
            </div>
        </div>
            </div>
        </nav>
    @yield('content')




    <footer class="footer">
        <div class="container">
            <div class="footer-nav">
                <ul class="nav justify-content-center">
                  <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#"><i class="fab fa-facebook"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                  </li>


                
                </ul>
                <p _class="mb-5"> Copyright © 2021 - GNAMANGNAMAN.COM, Tous les reservés sont reservés <br> Un produit de CARE International - Côte d'Ivoire <br>Fièrement devéloppé par WicSoft </p>


            </div>
        </div>
    </footer>





    <script src="js/bootstrap.bundle.min.js" ></script>
    <script src="js/script.js" ></script>


    <script>
    const cap2 = _('cap2');
    const cap1 = _('cap1');
		const p1 = _('p1');
		const p2 = _('p2');

    cap2.style.display="none";
		// console.log(displayForm);
      p1.classList.add('active');
  		p2.addEventListener('click', () => {
			p1.classList.remove('active');
			p2.classList.add('active');
      cap1.style.display="none";
      cap2.style.display="block";
      cap2.style.transform='translate(0%)';
      cap2.style.transition = 'transform .5s';

		

		});

    	p1.addEventListener('click', () => {
			p2.classList.remove('active');
			p1.classList.add('active');
      cap1.style.display="block";
      cap2.style.display="none";
       cap2.style.transform='translate(-100%)';
      cap1.style.transition = 'transform .5s';

		

		});

    function _(e){
			return document.getElementById(e);
		}
    </script>
</body>
</html>




