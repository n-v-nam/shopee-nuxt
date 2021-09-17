<template>
  <div id="signup-page">
    <v-card class="w-[400px] h-[510px] mt-8">
      <div v-if="!filledForm">
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
        <div class="text-sm flex justify-center mt-6">
          <div>
            <span class="text-gray-400">New to Shopee? </span>
            <span
              class="text-[#FA5030] cursor-pointer hover:text-red-800 mx-1"
              @click="$router.push('/buyer/login')"
              >Log In</span
            >
          </div>
        </div>
      </div>
      <div v-else class="enter-code">
        <div class="flex items-center my-6">
          <v-col cols="2">
            <v-icon
              color="#FA5030"
              class="cursor-pointer hover:opacity-70"
              @click="onBack"
              >mdi-arrow-left</v-icon
            >
          </v-col>
          <v-col cols="10">
            <span class="font-medium">Please Enter The Verification Code</span>
          </v-col>
        </div>
        <div class="flex justify-center my-2">
          <span class="text-xs opacity-80"
            >Your verification code will be sent to email</span
          >
        </div>
        <div class="flex justify-center">
          <span class="text-sm">{{ email }}</span>
        </div>
        <div class="input-verify-code">
          <input
            type="text"
            v-model="verifyCode"
            maxLength="6"
            placeholder="ENTER CODE"
          />
        </div>
        <div v-if="time <= 0" class="flex justify-center my-10">
          <span>
            You did not receive the code?
          </span>
          <span
            class="cursor-pointer hover:opacity-70 mx-1"
            style="color: #FA5030"
            >Resend</span
          >
        </div>
        <div v-else class="flex justify-center my-10">
          <span class="cursor-pointer mx-1"
            >Please wait {{ time }} seconds to resend.</span
          >
        </div>
        <div class="flex justify-center my-10">
          <v-btn color="#EB8831"
            ><span style="color: white">Confirm</span></v-btn
          >
        </div>
      </div>
    </v-card>
  </div>
</template>

<script>
export default {
  data() {
    return {
      filledForm: false,
      email: null,
      password: null,
      repassword: null,
      verifyCode: null,
      time: 60,
      error: null
    };
  },
  watch: {
    filledForm(val) {
      if (val) {
        const timeValue = setInterval(() => {
          this.time--;
          if (this.time == 0) clearInterval(timeValue);
        }, 1000);
      }
    }
  },
  computed: {
    validateForm() {
      if (this.repassword !== this.password && !this.repassword) {
        this.error = "confirm password doesn't match";
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
    onBack() {
      this.filledForm = false;
      (this.password = null),
        (this.repassword = null),
        (this.verifyCode = null),
        (this.time = 60),
        (this.error = null);
    },
    actionRegister() {
      this.filledForm = true;
    }
  }
};
</script>

<style lang="scss">
@import "@/assets/scss/components/buyer/signup.scss";
</style>
