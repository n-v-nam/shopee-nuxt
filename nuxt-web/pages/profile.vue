<template>
  <div id="profile-main">
      <div>
        <Sidebar/>
      </div>
      <div class="body-profile">
          <NuxtChild />
      </div>
  </div>
</template>

<script>
export default {
  validate(route) {
    if (route.route.fullPath == "/profile" || route.route.fullPath == "/profile/account") {
      route.redirect("/profile/account/info");
    }
    return true;
  },
}
</script>
<style lang="scss">
@import '@/assets/scss/components/profile/index.scss'
</style>