{{--
    Chemin :/resources/views/templates/partials/_footer.blade.php
    Description: Templates par default
    Données disponible: -- // --
--}}

<footer class="pt-5 pb-1">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mb-4">
        <ul class="list-unstyled">
          <li>
             <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-phone-fill mb-1 mr-2" viewBox="0 0 16 16">
                  <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z"/>
                </svg>
                 <span class="text-ColorPrivBlue">04 88 89 13 62 </span>
             </span>
          </li>
          <li>
            <span class="">
               <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-envelope-fill mb-1" viewBox="0 0 16 16">
                  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
               </svg>
               <span class="text-ColorPrivBlue">mavis.frimpong@hotmail.be</span>
            </span>
          </li>
          <li>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-geo-alt-fill mb-1 mr-2" viewBox="0 0 16 16">
              <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
            </svg>
            <a href="#" class="text-decoration-none text-ColorPrivBlue LinkHover"> Rue de l'industrie 39 4420 Saint-Nicolas</a>
          </li>
        </ul>
      </div>
      <div class="col-md-6 ">
        <div class="h-100 text-end">
          <a type="button" href="{{ URL::route('page.contact') }}" class="btn btn-ColorPrivBlue btn-lg fw-bold shadow-lg text-uppercase">Contact</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="h-100">
          <div class="h5 text-ColorPrivBlue fw-bold">Menu</div>
          <ul class="p-0">
            <li class="list-unstyled"><a href="{{ URL::route('page.accueil') }}" class="text-decoration-none text-ColorPrivBlue LinkHover">Accueil</a></li>
            <li class="list-unstyled"><a href="{{ URL::route('page.soins') }}" class="text-decoration-none text-ColorPrivBlue LinkHover">Nos soins</a></li>
            <li class="list-unstyled"><a href="{{ URL::route('page.services') }}" class="text-decoration-none text-ColorPrivBlue LinkHover">Autres Services</a></li>
            <li class="list-unstyled"><a href="{{ URL::route('page.blog.index') }}" class="text-decoration-none text-ColorPrivBlue LinkHover">Blog</a></li>
            <li class="list-unstyled"><a href="{{ URL::route('page.contact') }}" class="text-decoration-none text-ColorPrivBlue LinkHover">Contact</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 text-end">
            <p class="fw-bold">Suivez-moi</p>
              <div class="">
                <a href="" class="text-decoration-none"><img src="{{asset('images/facebook.png')}}" alt="facebook" height="30px" width="30px"></a>
                <a href="" class="text-decoration-none"><img src="{{asset('images/instagram.png')}}" alt="instagram" height="30px" width="30px"></a>
                <a href="" class="text-decoration-none"><img src="{{asset('images/Linkedin.png')}}" alt="Linkdin" height="30px" width="30px"></a>
                <a href="" class="text-decoration-none"><img src="{{asset('images/twitter.png')}}" alt="twitter"  height="30px" width="30px"></a>
              </div>
        </div>
      </div>
      <div class="col-12">
        <div class="text-center">
          <div class="border"></div>
          <p class="m-0">Copyright © 2020 Phil Tchatchoua. Tous droits réservés.</p>
        </div>
      </div>
    </div>
  </div>
</footer>

