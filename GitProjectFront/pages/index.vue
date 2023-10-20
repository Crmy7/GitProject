<template>
  <div class="">
    <div class="flex justify-center align-items-center py-16 font-bold text-4xl">
      <h1 class="text-white text-center">Pires Blagues, Meilleurs Sourires : <br> Là où l'Absurde Devient Drôle!</h1>
    </div>
    
    
  </div>
</template>

<script>


import Header from "../components/Header";

import {ref, onMounted} from "vue";

import axios from "axios";


export default {

  components: {

    Header,


  },

  setup() {

    const jokes = ref([]);


    onMounted(() => {

      // Effectuez une requête GET vers l'API Symfony pour récupérer les produits en utilisant Axios

      axios

          .get('http://127.0.0.1:8000/api/jokes', {

            headers: {

              'Content-Type': 'application/json',

              'Accept': 'application/json'

            }

          })

          .then(response => {

            jokes.value = response.data;

          })

          .catch(error => {

            console.error('Erreur lors de la récupération des produits :', error);

          });

    });


    return {

      jokes,

    };

  },

};

</script>