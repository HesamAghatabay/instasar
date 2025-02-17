<template>
  <q-page padding>
    <div class="justify-center q-pa-lg">
      <h1 class="text-h2 text-weight-bold">Register Page</h1>
      <div class="row">
        <div class="col-6">
          <q-input outlined color="blue-9" label="Enter name" v-model="name" type="text"></q-input>
        </div>
        <div class="col-6">
          <q-input
            outlined
            color="blue-9"
            label="Enter email"
            v-model="email"
            type="text"
          ></q-input>
        </div>
        <div class="col-6">
          <q-input
            outlined
            color="blue-9"
            label="Enter password"
            v-model="password"
            type="password"
          ></q-input>
        </div>
        <div class="col-6">
          <q-input
            outlined
            color="blue-9"
            label="Confirm password"
            v-model="confirmpassword"
            type="password"
          ></q-input>
        </div>
      </div>
      <q-btn class="full-width q-mt-lg" color="green-8"> Register </q-btn>
    </div>
  </q-page>
</template>

<script setup>
import { ref } from 'Vue'

const name = ref('')
const email = ref('')
const password = ref('')
const confirmpassword = ref('')


</script>
