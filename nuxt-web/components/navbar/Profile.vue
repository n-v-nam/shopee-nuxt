<template>
  <div id="profile" class="flex justify-center text-[13px]">
    <div class="card-notification cursor-pointer relative">
      <div class="header--notify mx-2">
        <v-icon dark>mdi-bell-badge-outline</v-icon>
        <span>Notification</span>
      </div>
      <div class="card-notify-show">
        <div class="header-notification">
          <span>Notification</span>
        </div>
        <v-list class="list-notify">
          <v-list-item v-for="(notify, index) in notifications" :key="index">
            <v-col cols="2">
              <v-img
                :src="notify.img"
                height="50px"
                width="50px"
                class="grey"
              ></v-img>
            </v-col>
            <v-col cols="10">
              <v-list-item-content>
                <v-list-item-title v-html="notify.title"></v-list-item-title>
                <v-list-item-subtitle
                  v-html="notify.content"
                ></v-list-item-subtitle>
              </v-list-item-content>
            </v-col>
          </v-list-item>
        </v-list>
        <div class="footer-notify">
          <span>See all</span>
        </div>
      </div>
    </div>
    <div class="help cursor-pointer hover:opacity-70 mx-2">
      <v-icon dark>mdi-help-circle-outline</v-icon>
      <span>Help</span>
    </div>
    <div v-if="!username" class="help cursor-pointer hover:opacity-70 mx-2">
      <span @click="$router.push('/buyer/signup')">Sign Up</span>
    </div>
    <span v-if="!username" class="opacity-50">|</span>
    <div v-if="!username" class="help cursor-pointer hover:opacity-70 mx-2">
      <span @click="$router.push('/buyer/login')">Login</span>
    </div>
    <div v-if="username" class="relative cursor-pointer card-account">
      <div>
        <div class="account mx-2" @click="$router.push('/buyer/profile')">
          <v-icon dark>mdi-account-circle-outline</v-icon>
          <span>{{ username }}</span>
        </div>
        <div class="pt-2">
          <v-list class="list-profile">
            <v-list-item v-for="(item, index) in items" :key="index">
              <v-icon>{{ item.icon }}</v-icon>
              <v-list-item-title>{{ item.title }}</v-list-item-title>
            </v-list-item>
          </v-list>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapGetters } from "vuex";
export default {
  data() {
    return {
      items: [
        { value: 0, title: "Profile", icon: "mdi-account-circle-outline" },
        { value: 1, title: "Cart", icon: "mdi-cart" },
        { value: 2, title: "Logout", icon: "mdi-logout" }
      ],
      notifications: [
        {
          id: 1,
          img:
            "https://laptoptcc.com/wp-content/uploads/2021/01/dell-xps-9500-laptop-tcc-600x600.jpg",
          title: "Thông báo 1",
          content:
            "Cuộc sống bận rộn, dành thời gian bên gia đình với các món ăn khoái khẩu góp phần làm ấm thêm tình cảm mọi người thân."
        },
        {
          id: 2,
          img:
            "https://laptoptcc.com/wp-content/uploads/2021/05/241545702_400020164810723_7228546913993246630_n-600x600.jpg",
          title: "Thông báo 2",
          content:
            "Cuộc sống bận rộn, dành thời gian bên gia đình với các món ăn khoái khẩu góp phần làm ấm thêm tình cảm mọi người thân."
        },
        {
          id: 3,
          img:
            "https://laptoptcc.com/wp-content/uploads/2021/01/dell-xps-9500-laptop-tcc-600x600.jpg",
          title: "Thông báo 3",
          content:
            "Cuộc sống bận rộn, dành thời gian bên gia đình với các món ăn khoái khẩu góp phần làm ấm thêm tình cảm mọi người thân."
        },
        {
          id: 4,
          img:
            "https://laptoptcc.com/wp-content/uploads/2021/01/dell-xps-9500-laptop-tcc-600x600.jpg",
          title: "Thông báo 4",
          content:
            "Cuộc sống bận rộn, dành thời gian bên gia đình với các món ăn khoái khẩu góp phần làm ấm thêm tình cảm mọi người thân."
        }
      ]
    };
  },
  computed: {
    ...mapGetters({
      username: "buyer/getName"
    })
  }
};
</script>

<style lang="scss">
@import "@/assets/scss/components/navbar/profile.scss";
</style>
