<template>
  <q-page padding>
    <h1>Hi</h1>
  </q-page>
</template>

<script setup>
import { api } from 'src/boot/axios'

api
  .get('api/posts')
  .then((r) => {
    console.log(r)
  })
  .catch((e) => {
    console.log(e)
  })
</script>
