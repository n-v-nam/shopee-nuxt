<template>
  <div id="profile" class="flex justify-center text-[13px]">
    <div class="notification cursor-pointer hover:opacity-50 mx-2">
      <v-icon dark>mdi-bell-badge-outline</v-icon>
      <span>Notification</span>
    </div>
    <div class="help cursor-pointer hover:opacity-50 mx-2">
      <v-icon dark>mdi-help-circle-outline</v-icon>
      <span>Help</span>
    </div>
    <div v-if="!username"  class="help cursor-pointer hover:opacity-50 mx-2">
      <span @click="$router.push('/buyer/signup')">Sign Up</span>
    </div>
    <span v-if="!username" class="opacity-50">|</span>
    <div v-if="!username"  class="help cursor-pointer hover:opacity-50 mx-2">
      <span @click="$router.push('/buyer/login')">Login</span>
    </div>
    <div v-if="username" class="account cursor-pointer hover:opacity-50 mx-2">
      <v-icon dark>mdi-account-circle-outline</v-icon>
      <span>{{username}}</span>
    </div>
  </div>
</template>

<script>
export default {
  data(){
    return{
      username: ''
    }
  }
}
</script>

<style>
  span{
    color: azure;
    font-family: Roboto, "Helvetica Neue", Helvetica, Arial, 文泉驛正黑, "WenQuanYi Zen Hei", "Hiragino Sans GB", "儷黑 Pro", "LiHei Pro", "Heiti TC", 微軟正黑體, "Microsoft JhengHei UI", "Microsoft JhengHei", sans-serif;
  }
</style>