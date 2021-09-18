<template>
  <div id="connect" class="flex justify-center text-[13px]">
    <div class="cursor-pointer hover:opacity-70 mx-2">
      <span>Seller Centre</span>
    </div>
    <span class="opacity-50">|</span>
    <div class="cursor-pointer hover:opacity-70 mx-2">
      <span>Download</span>
    </div>
    <span class="opacity-50">|</span>
    <div class="mx-2">
      <span>Follow us on</span>
      <v-icon dark>mdi-facebook</v-icon>
      <v-icon dark>mdi-google-plus</v-icon>
    </div>
  </div>
</template>

<script>
export default {

}
</script>

<style scoped>
  span{
    color: azure;
    font: Roboto, "Helvetica Neue", Helvetica, Arial, 文泉驛正黑, "WenQuanYi Zen Hei", "Hiragino Sans GB", "儷黑 Pro", "LiHei Pro", "Heiti TC", 微軟正黑體, "Microsoft JhengHei UI", "Microsoft JhengHei", sans-serif;
  }
  .v-icon{
    font-size: 18px;
    margin-top: -4px;
    cursor: pointer;
    margin-inline: 2px;
  }
</style>