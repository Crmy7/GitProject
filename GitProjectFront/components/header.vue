<template>
    <header class="bg-transparent py-4">
      <div class="container mx-auto">
        <nav class="flex items-center justify-between">
          <div class="text-white font-bold text-xl uppercase ml-10 flex items-center">
            <p>
                Blague de
            </p>
            <img class="h-11 px-5"  src="../assets/img/logo.png" alt="">
          </div>
          <ul class="flex space-x-4 mr-10 gap-10 font-bold">
            <li class="px-5"><router-link class="text-white" to="/">Accueil</router-link></li>
            <li class="px-5"><router-link class="text-white" to="/">À propos</router-link></li>
            <li class="px-5"><router-link class="text-white" to="/">Services</router-link></li>
            <li class="px-5"><router-link class="text-white" to="/">Contact</router-link></li>
          </ul>
        </nav>
      </div>
    </header>
  </template>

  <style>


ul { 
  padding: 0; 
  list-style: none; 
}
a {
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 0.15em;
  display: inline-block;
  position: relative;
}
a:after {    
  background: none repeat scroll 0 0 transparent;
  content: "";
  display: block;
  height: 2px;
  position: absolute;
  background: #fff;
  transition: width 0.3s ease 0s, left 0.3s ease 0s;
  width: 0;
}
a:hover:after { 
  width: 100%; 
  left: 0; 
}



</style>

  <script></script>