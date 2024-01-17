<template>
  <q-page class="">
    <q-input aria-placeholder="username" label="User Name" rounded outlined class="q-mt-lg"></q-input>
    v-model="username"
    <q-input aria-placeholder="password" label="Password" rounded outlined class="q-mt-lg"></q-input>
    <q-btn class="full-width" q-mt-md q-py-sm color="primary" rounded>Register</q-btn>
    {{ username }}
    <img
      alt="My logo"
      src="~assets/logo-color.svg"
      style="width: 300px; height: 300px"
    >
  </q-page>
</template>

<script>
import { defineComponent, ref } from 'vue'

export default defineComponent({
  name: 'IndexPage',
  setup (){
    const username = ref('')
    return {
      username
    }
  }
})
</script>
