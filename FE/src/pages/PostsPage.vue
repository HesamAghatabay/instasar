<template>
  <q-page padding>
    <h1>Hi</h1>
    <q-inner-loading v-if="!me" size="45px" />
    <div v-if="me">
      <img :src="me.Profile.avatar" :alt="me.Profile.full_name" />
      <p>{{ me.Profile.full_name }}</p>
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
