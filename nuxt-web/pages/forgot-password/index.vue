<template>
  <div id="forgot-password" class="flex justify-center items-center">
    <v-col cols="4">
      <v-card class="flex">
        <div v-if="!filledEmail" class="h-[280px]">
          <v-row class="flex pt-5 pb-10 px-2">
            <v-col cols="2">
              <v-icon class="cursor-pointer" color="#EE4D2D" @click="onBack">mdi-arrow-left</v-icon>
            </v-col>
            <v-col class="flex justify-center" cols="8">
              <span class="text-xl font-medium">Reset Password</span>
            </v-col>
          </v-row>
          <v-row class="flex justify-center mt-8">
            <div class='input-reset p-auto ml-2'>
              <input
                v-model="email"
                v-validate="'required|email'"
                name="email"
                placeholder="Enter your email..."
              />
              <span class="text-red-500 text-sm">{{
                errors.first("email")
              }}</span>
            </div>
          </v-row>
          <v-row class="flex justify-center pt-10">
            <v-btn :disabled="errors.first('email')" color="#EE4D2D" class="w-[70%] p-auto ml-2">
              <span class="text-white font-normal" @click="onNext">Next</span>
            </v-btn>
          </v-row>
        </div>
         <div v-else class="enter-code">
        <div class="flex pt-5 pb-10 px-2">
          <v-col cols="2">
            <v-icon
              color="#FA5030"
              class="cursor-pointer hover:opacity-70"
              @click="onBack"
              >mdi-arrow-left</v-icon
            >
          </v-col>
          <v-col cols="10">
            <span class="text-xl font-medium">Please Enter The Verification Code</span>
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
    </v-col>
  </div>
</template>

<script>
export default {
  layout: "buyer",
  data() {
    return {
      filledEmail: false,
      email: null,
      verifyCode: null,
      time: 60
    };
  },
  watch: {
    filledEmail(val){
      if(val){
        const reserveTime = setInterval(()=>{
          this.time--;
          if(this.time == 0  || !this.filledEmail) clearInterval(reserveTime);
        }, 1000)
      }
    }
  },
  methods: {
    onNext(){
      if(!this.errors.first('email')){
        this.time = 60;
        this.filledEmail = true;
      }
    },
    onBack(){
      this.filledEmail = false
    }
  }
};
</script>

<style lang="scss">
#forgot-password {
  .v-row{
    padding: unset
  }
  background-color: #ffffff;
  box-shadow: inset 0px 6px 11px rgb(0 0 0 / 6%);
  width: 100%;
  height: 600px;

  .input-reset{
    width: 70%;
    input{
      border: 1px solid lightgray;
      border-radius: 2px;
      height: 45px;
      width: 100%;
      background-color: rgb(247, 238, 226);
    }
  }
  .enter-code{
        padding: auto;
        span{
            color: black
        }
        .input-verify-code{
            display: flex;
            justify-content: center;
            margin-block: 70px;
            input{
                background-color: antiquewhite;
                width: 80%;
                height: 60px;
                text-align: center;
                font-size: 30px;
            }
        }
    }
}
</style>
