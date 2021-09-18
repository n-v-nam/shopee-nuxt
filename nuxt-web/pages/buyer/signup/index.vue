<template>
  <div id="signup-page">
    <v-card class="w-[400px] h-[510px] mt-8">
      <div>
        <v-card-text class="flex items-center title-logo">
          <v-col class="flex items-center justify-start">
            <span class="text-xl font-bold text-black">Sign Up</span>
          </v-col>
          <v-col class="flex items-center justify-end">
            <img src="../../../assets/logo3.png" alt="Logo" class="w-32 h-16" />
          </v-col>
        </v-card-text>
        <div class="form-login">
          <form>
            <v-text-field
              v-validate="'required|email'"
              name="email"
              v-model="email"
              label="Email"
            />
            <span class="errors-form">{{ errors.first("email") }}</span>
            <v-text-field
              v-validate="'required|min:6'"
              name="password"
              type="password"
              v-model="password"
              label="Password"
              class="mt-2"
            />
            <span class="errors-form">{{ errors.first("password") }}</span>
            <v-text-field
              v-validate="'required|min:6'"
              name="repassword"
              type="password"
              v-model="repassword"
              label="Confirm Password"
              class="mt-2"
            />
            <span class="errors-form">{{
              errors.first("repassword") ? errors.first("repassword") : error
            }}</span>
            <v-btn
              :disabled="!validateForm"
              class="w-full mt-2"
              color="#E77730"
              @click="actionRegister"
            >
              <span>SIGN UP</span>
            </v-btn>
          </form>
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
        <div class="text-sm flex justify-center mt-12" :class="{'absolute right-[125px] bottom-6': errors.any()}">
          <div>
            <span class="text-gray-400">New to Shopee? </span>
            <span
              class="text-[#FA5030] font-medium cursor-pointer hover:text-red-800 mx-1"
              @click="$router.push('/buyer/login')"
              >Log In</span
            >
          </div>
        </div>
      </div>
    </v-card>
  </div>
</template>

<script>
import { mapActions } from "vuex";

export default {
  data() {
    return {
      email: null,
      password: null,
      repassword: null,
      error: null
    };
  },
  computed: {
    validateForm() {
      if (this.repassword !== this.password && this.repassword) {
        this.error = "Confirm password doesn't match";
        return false;
      } else this.error = null;
      return (
        this.email &&
        this.password &&
        !this.errors.any() &&
        this.repassword == this.password
      );
    }
  },
  methods: {
    ...mapActions({
      register: "buyer/register"
    }),
    onBack() {
      (this.password = null), (this.repassword = null), (this.error = null);
    },
    async actionRegister() {
      await this.register({
        email: this.email,
        password: this.password
      });
    }
  }
};
</script>

<style lang="scss">
@import "@/assets/scss/components/buyer/signup.scss";
</style>
