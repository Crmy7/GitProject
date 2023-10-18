<template>
  <div>
    <section>
      <h2 class="text-white">Tous les produits</h2>
      <div>
        <div v-for="joke in jokes" :key="joke.id" class="text-white">
          <div>
            <h2>{{ joke.title }}</h2>
            <p>😁</p>
          </div>
          <p>{{ joke.id }}</p>
        </div>
      </div>
    </section>
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