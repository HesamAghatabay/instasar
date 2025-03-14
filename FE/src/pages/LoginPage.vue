<template>
  <q-page padding>
    <div class="justify-center">
      <h1 class="text-h2">You did it 👌</h1>
      <br />
      <q-input rounded outlined label="email" type="email" suffix="@gmail.com" v-model="email" />
      <q-input rounded outlined label="password" type="password" v-model="password" />
      <q-btn lable="Login" label="login" color="green-9" rounded @click="login" />
    </div>
  </q-page>
</template>

<script setup>
import { ref } from 'vue'
import { api } from 'src/boot/axios'
import { Notify } from 'quasar'
import { useRouter } from 'vue-router'

const email = ref('')
const password = ref('')
const router = useRouter()
function login() {
  api
    .post('/oauth/token', {
      grant_type: 'password',
      client_id: 2,
      client_secret: '4ws1wsLI2zRJ2oYB6ezlnwNsLTKLb1xiV9uNRfHt',
      scope: '*',
      username: email.value,
      password: password.value,
    })

    .then((r) => {
      if (r.data.access_token) {
        localStorage.setItem('access_token', r.data.access_token)
        api.defaults.headers = {
          Authorization: 'Bearer ' + localStorage.getItem('access_token'),
          'Content-Type': 'application/json',
          Accept: 'application/json;charset=UTF-8',
        }
        Notify.create({
          type: 'positive',
          message: 'user login success',
        })
        router.push('/posts')
      } else {
        Notify.create({
          type: 'negative',
          message: 'user login no success',
        })
      }
    })
    .catch((e) => {
      console.log(e)
      Notify.create({
        type: 'negative',
        message: 'User login failed',
      })
    })
}
</script>
