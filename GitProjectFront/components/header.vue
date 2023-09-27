<template>
    <header class="bg-blue-500 py-4">
      <div class="container mx-auto">
        <nav class="flex items-center justify-between">
          <div class="text-white font-bold text-3xl ml-10 flex items-center">
            <p>
                Blague de
            </p>
            <img class="h-24"  src="../assets/img/logo.png" alt="">
          </div>
          <ul class="flex space-x-4 mr-24 gap-16">
            <NuxtLink to="/" class="text-white font-bold text-xl hover:text-gray-300">Accueil</NuxtLink>
            <NuxtLink to="/blagues" class="text-white font-bold text-xl hover:text-gray-300">Blagues</NuxtLink>
            <NuxtLink to="/a-propos" class="text-white font-bold text-xl hover:text-gray-300">À Propos</NuxtLink>
            
          </ul>
        </nav>
      </div>
    </header>
  </template>