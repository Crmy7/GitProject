<template>
    <div>
        <h2>Joke Single</h2>
        <div v-if="joke">
            <h2>{{ joke.title }}</h2>
            <p>{{ joke.content }}</p>
        </div>
        <div v-else>
            <p>Joke non trouvé</p>
        </div>
    </div>
</template>
  
<script>
import { ref, onMounted } from "vue";
import axios from "axios";

export default {
    setup() {
        const joke = ref([]);

        const id = useRoute().params.id;

        onMounted(() => {
            // Effectuer une requête GET vers l'API Symfony pour récupérer le joke en fonction de l'ID
            axios
                .get(`http://127.0.0.1:8000/api/jokes/${id}`, {
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                    },
                })
                .then(response => {
                    joke.value = response.data;
                })
                .catch(error => {
                    console.error('Erreur lors de la récupération du joke :', error);
                });
        });

        return {
            joke,
        };
    },
};
</script>
  