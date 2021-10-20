<template>
  <div id="profile-account">
    <div class="header-account">
      <span class="header-account__title">{{ title }}</span>
      <span class="header-account__description">{{ description }}</span>
    </div>
    <div>
      <NuxtChild />
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {};
  },
  computed: {
    title() {
      if(this.$route.name.split('-').reverse()[0] == 'file') return 'My Profile'
    },
    description() {
      if(this.$route.name.split('-').reverse()[0] == 'file') return 'Manage profile information for account security';
    }
  }
};
</script>

<style lang="scss" scoped>
@import "@/assets/scss/components/profile/account/index.scss";
</style>
