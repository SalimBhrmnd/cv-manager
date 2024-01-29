<template>
  <q-page padding>
    <!-- content -->
    <div class="row justify-center">
      <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 q-gutter-y-md">
        <q-input
          v-model="username"
          rounded
          outlined
          label="email"
          type="email"
          ref="usernameref"
          placeholder="email@gmail.com"
          :rules="[val => !!val || 'feild is required', val => val.length > 10 || 'pleas use at least 15 characters']"
        />
        <q-input
          v-model="password"
          rounded
          outlined
          label="password"
          type="password"
          ref="passwordref"
          placeholder="password"
          :rules="[val => !!val || 'feild is required', val => val.length > 3 || 'pleas use at least 3 characters']"

        />
        <q-btn
          @click="login"
          class="full-width q-py-sm"
          outline
          color="light-blue-6"
          label="Login"
          icon="security"
        ></q-btn>
      </div>
    </div>
  </q-page>
</template>

<script>
import { ref } from 'vue'
import { NavigationFailureType } from 'vue-router'

export default {
  // name: 'PageName',
  setup () {
    const q = useQuasar()
    const username = ref (null)
    const password = ref (null)
    const usernameref = ref (null)
    const passwordref = ref (null)
    const clientsecret = ref ('8HdEhbzv8dBfFpqaGtkKw1t8ly3FAqN5jTSoXJJq')
    const clientID = ref (2)
    function login() {
      usernameref.value.validate()
      passwordref.value.validate()
      if(usernameref.value.hasError || passwordref.value.hasError) {
        q-NavigationFailureType({
          color: 'negative',
          position: 'top',
          message: 'you need to check your input'
        })
      } else{
        api.post('api/')
      }
    }
    return {
      username,
      usernameref,
      password,
      passwordref,
      login,
    }
    }
}
</script>
