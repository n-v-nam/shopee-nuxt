<template>
  <div id="login-page">
    <v-card class="w-[400px] h-[510px] mt-8">
      <v-card-text class="flex items-center title-logo">
        <v-col class="flex items-center justify-start">
          <span class="text-xl font-bold text-black">Log In</span>
        </v-col>
        <v-col class="flex items-center justify-end">
          <img src="../../assets/logo3.png" alt="Logo" class="w-32 h-16" />
        </v-col>
      </v-card-text>
      <div class="form-login">
        <form>
          <v-text-field v-model="email" label="Email" required></v-text-field>
          <v-text-field
            type="password"
            v-model="password"
            label="Password"
            required
          ></v-text-field>
          <v-checkbox v-model="checkbox" label="Remember me?"></v-checkbox>
          <v-btn class="w-full" color="#E77730" @click="actionLogIn">
            <span>LOG IN</span>
          </v-btn>
        </form>
      </div>
      <div class="flex justify-end action-login-other">
        <v-col>
          <span class="cursor-pointer" @click="$router.push('/forgot-password')">Forgot Password</span>
        </v-col>
        <v-col class="flex items-center justify-end">
          <span>Log in with SMS</span>
        </v-col>
      </div>
      <div class="flex items-center justify-center pl-[7.5%] w-[92.5%]">
        <v-col cols="5">
          <v-divider />
        </v-col>
        <v-col cols="2" class="opacity-50 text-xs flex justify-center"
          >OR</v-col
        >
        <v-col cols="5">
          <v-divider />
        </v-col>
      </div>
      <div
        class="flex connect-login items-center justify-around w-[95%] pl-[5%] h-9"
      >
        <v-col
          class="bg-[#1877F2] flex items-center cursor-pointer hover:opacity-90 h-full"
          cols="4"
        >
          <v-icon dark>mdi-facebook</v-icon>
          <span>Facebook</span>
        </v-col>
        <v-col
          class="bg-[#1877F2] flex items-center cursor-pointer hover:opacity-90 h-full"
          cols="4"
        >
          <v-icon dark>mdi-google</v-icon>
          <span>Google</span>
        </v-col>
      </div>
      <div class="text-sm flex justify-center mt-6">
        <div>
          <span class="text-gray-400">New to Shopee? </span>
          <span
            class="text-[#FA5030] font-medium cursor-pointer hover:text-red-800 mx-1"
            @click="$router.push('/buyer/signup')"
            >Sign Up</span
          >
        </div>
      </div>
    </v-card>
  </div>
</template>

<script>
import { mapActions } from 'vuex';
export default {
  data() {
    return {
      checkbox: false,
      email: null,
      password: null
    };
  },
  methods:{
    ...mapActions({
      login: 'buyer/login'
    }),
    async actionLogIn(){
      await this.login({
        email: this.email,
        password: this.password
      })
    }
  }
}
</script>

<style lang="scss">
@import "@/assets/scss/components/buyer/login.scss";
</style>
