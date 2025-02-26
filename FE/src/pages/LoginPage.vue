<template>
  <q-page padding>
    <div class="flex flex-center">
      <h1 class="text-h2">You did it 👌</h1>
      <q-input rounded lable="email" type="email" v-model="email" />
      <q-input rounded lable="password" type="password" v-model="password" />
      <q-btn lable="Login" color="green-9" rounded @click="login" />
    </div>
  </q-page>
</template>

<script setup>
import { ref } from 'vue'
import { api } from 'src/boot/axios'
import { useRoute } from 'vue-router'

const email = ref('')
const password = ref('')
const router = useRoute
function login() {
  api
    .post('/oauth/token', {
      grant_type: 'password',
      client_id: 2,
      client_secret: client - secret,
      scope: '',
      email: email.value,
      password: password.value,
    })
    .then((r) => {
      console.log(r)
    })
}
</script>
