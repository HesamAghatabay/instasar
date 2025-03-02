<template>
  <q-page padding>
    <h1>Hi</h1>
    <div v-if="me">
      <img :src="me.profile.avatar" :alt="me.profile.full_name" />
      <p>{{ me.profile.full_name }}</p>
    </div>
  </q-page>
</template>

<script setup>
import { api } from 'src/boot/axios'
import { ref } from 'vue'
const me = ref(null)

api
  .get('api/posts')
  .then((r) => {
    console.log(r.data)
  })
  .catch((e) => {
    console.log(e)
  })
</script>
