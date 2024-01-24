<template>
  <q-page padding class="">
    <div class="row justify-center">
      <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6">
       <q-input  placeholder="email"
       label="User Name"
       rounded
       outlined
       type="username"
       v-model="username"
       ></q-input>
       <q-input placeholder="password"
       label="Password"
       rounded
       outlined
       v-model="password"
       type="password"
       class="q-mt-lg"
      ></q-input>
    <q-input placeholder="confirm password"
    label="confirm Password"
    rounded
    outlined
    v-model="confirmPassword"
    type="password"
    class="q-mt-lg"
    ></q-input>

    <q-btn outline  class="full-width q-mt-md q-py-sm" color="primary" rounded
    @click="register"
    >Register</q-btn>


      </div>
    </div>

    {{ username }}
    <img
      alt="My logo"
      src="~assets/logo-color.svg"
      style="width: 300px; height: 300px"
    >
  </q-page>
</template>

<script>
import { api } from 'src/boot/axios';
import { defineComponent, ref } from 'vue'

export default defineComponent({
  name: 'IndexPage',
  setup () {
    const username = ref("");
    const password = ref("");
    const confirmPassword = ref("");
    function register () {
      if (password.value && confirmPassword.value){
        if (password.value === confirmPassword.value) {
          api.post('api/register', {
            email: username.value,
            password: password.value,
          })
           .then((r) => {
              console.log(r.data);
              if (r.data.status) {
              } else{
                
              }
            });
        } else {
          alert('password not match')
        }
      }else {
        alert('Enter Data')
      }
    }
    return {
      username,
      password,
      confirmPassword,
      register,
    }
  }
})
</script>
