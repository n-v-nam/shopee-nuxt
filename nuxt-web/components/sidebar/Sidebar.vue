<template>
  <div id="sidebar">
    <v-row class="avatar-row items-center">
      <div class="avatar">
        <v-img
          src="https://upload.wikimedia.org/wikipedia/commons/8/8c/Cristiano_Ronaldo_2018.jpg"
          alt="CR7"
        ></v-img>
      </div>
      <div class="title">
        <v-row class="user-name justify-center">
          <span class="name">nameroreal</span>
        </v-row>
        <v-row class="justify-center opacity-70">
          <v-icon>mdi-pencil</v-icon>
          <span>Edit account</span>
        </v-row>
      </div>
    </v-row>
    <v-row class="option__row items-center">
      <div class="option__row--img">
        <img src="https://cf.shopee.vn/file/ba61750a46794d8847c3f463c5e71cc4" />
      </div>
      <div @click="activeDropdownAccount = true">
        <span class="title__row" @click="$router.push('/profile/account')"
          >My Account</span
        >
      </div>
      <div v-show="activeDropdownAccount" class="row__dropdown">
        <div
          v-for="(item, index) in listAccountSetting"
          :key="index"
          class="dropdown--item"
        >
          <span
            :class="{
              'text-[#ee4d2d]':
                $route.fullPath == `/profile/account/${item.path}`
            }"
            @click="$router.push(`/profile/account/${item.path}`)"
            >{{ item.name }}</span
          >
        </div>
      </div>
    </v-row>
    <v-row class="option__row items-center">
      <div class="option__row--img">
        <img src="	https://cf.shopee.vn/file/f0049e9df4e536bc3e7f140d071e9078" />
      </div>
      <div>
        <span class="title__row">Purchase Order</span>
      </div>
    </v-row>
    <v-row class="option__row items-center">
      <div class="option__row--img">
        <img src="	https://cf.shopee.vn/file/e10a43b53ec8605f4829da5618e0717c" />
      </div>
      <div @click="activeDropdownNotify = true">
        <span class="title__row" @click="$router.push('/profile/notify')">Notify</span>
      </div>
      <div v-show="activeDropdownNotify" class="row__dropdown">
        <div
          v-for="(item, index) in listNotifySetting"
          :key="index"
          class="dropdown--item"
        >
          <span :class="{
              'text-[#ee4d2d]':
                $route.fullPath == `/profile/notify/${item.path}`
            }"
            @click="$router.push(`/profile/notify/${item.path}`)">{{ item.name }}</span>
        </div>
      </div>
    </v-row>
    <v-row class="option__row items-center">
      <div class="option__row--img">
        <img src="https://cf.shopee.vn/file/84feaa363ce325071c0a66d3c9a88748" />
      </div>
      <div>
        <span class="title__row">Voucher Warehouse</span>
      </div>
    </v-row>
    <v-row class="option__row items-center">
      <div class="option__row--img">
        <img src="https://cf.shopee.vn/file/a0ef4bd8e16e481b4253bd0eb563f784" />
      </div>
      <div>
        <span class="title__row">Shopee Coins</span>
      </div>
    </v-row>
  </div>
</template>

<script>
export default {
  data() {
    return {
      activeDropdownAccount: false,
      activeDropdownNotify: false,
      listAccountSetting: [
        { name: "Information", path: 'info'},
        { name: "Bank", path: 'bank'},
        { name: "Address", path: 'address'},
        { name: "Change Password", path: 'password'}
      ],
      listNotifySetting: [
        { name: "Order", path: 'order'},
        { name: "Promotion", path: 'promotion'},
        { name: "Update Wallet", path: 'wallet'},
        { name: "Activity", path: 'activity'},
        { name: "Review Update", path: 'review'},
        { name: "Shopee Update", path: 'update'}
      ]
    };
  },
  watch: {
    '$route.name': {
        handler: function(name) {
          if(name.split('-').find(item => item == 'account')) this.activeDropdownAccount = true;
          else this.activeDropdownAccount = false;
          if(name.split('-').find(item => item == 'notify')) this.activeDropdownNotify = true;
          else this.activeDropdownNotify = false;
        },
        deep: true,
        immediate: true
      }
  }
};
</script>

<style lang="scss">
@import "@/assets/scss/components/sidebar.scss";
</style>
