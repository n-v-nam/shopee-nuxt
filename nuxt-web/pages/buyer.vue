<template>
  <div id="buyer-page">
    <v-col class="flex justify-end" cols="11">
      <NuxtChild />
    </v-col>
  </div>
</template>

<script>
export default {
  layout: "buyer"
};
</script>

<style lang="scss">
@import "@/assets/scss/components/buyer/buyer.scss";
</style>
