<template>
  <div id="account-file">
    <v-row>
      <v-col cols="9" class="file__info">
        <v-row class="file__username">
          <v-col class="flex justify-end" cols="2">
            <span>User Name</span>
          </v-col>
          <v-col cols="10" class="file__username--input">
            <input type="text" v-model="username" />
            <span>Username can only be changed once.</span>
          </v-col>
        </v-row>
        <v-row class="file__name">
          <v-col class="flex justify-end" cols="2">
            <span>Name</span>
          </v-col>
          <v-col cols="10" class="file__name--input">
            <input type="text" v-model="name" />
          </v-col>
        </v-row>
        <v-row class="file__email">
          <v-col class="flex justify-end" cols="2">
            <span>Email</span>
          </v-col>
          <v-col cols="10" class="file__email--label">
            <span>{{ email }}</span>
            <nuxt-link class="text-[#689ACD] font-medium underline" to="/"
              >Change</nuxt-link
            >
          </v-col>
        </v-row>
        <v-row class="file__phone">
          <v-col class="flex justify-end" cols="2">
            <span>Phone Number</span>
          </v-col>
          <v-col cols="10" class="file__phone--input">
            <input type="text" v-model="phoneNumber" />
          </v-col>
        </v-row>
        <v-row class="file__shop">
          <v-col class="flex justify-end" cols="2">
            <span>Shope Name</span>
          </v-col>
          <v-col cols="10" class="file__shop--input">
            <input type="text" v-model="shopeName" />
          </v-col>
        </v-row>
        <v-row class="file__sex">
          <v-col class="flex justify-end" cols="2">
            <span>Sex</span>
          </v-col>
          <v-col cols="10" class="file__sex--select">
            <div v-for="item in sexOptions" :key="item" class="inline mx-2 p-auto">
              <input type="radio" :value="item" v-model="sex" class="mr-1" />{{
                item
              }}
            </div>
          </v-col>
        </v-row>
        <v-row class="file__birthday">
          <v-col class="flex justify-end" cols="2">
            <span>Date of Birth</span>
          </v-col>
          <v-col cols="10" class="file__birthday--input">
            <input type="text" v-model="birthday" />
          </v-col>
        </v-row>
      </v-col>
      <v-col cols="3" class="file__avatar">
        <div class="file__avatar--container">
          <v-row class="file__avatar--img">
            <v-img
              src="https://upload.wikimedia.org/wikipedia/commons/8/8c/Cristiano_Ronaldo_2018.jpg"
              alt="CR7"
            ></v-img>
          </v-row>
          <v-row class="file__avatar--input">
            <input ref="file" type="file" style="display: none" />
            <button class="file__avatar--bnt" @click="$refs.file.click()">Choose a photo</button>
          </v-row>
          <v-row class="file__avatar--require"> 
              <span>
                  Maximum file size 1 MB
              </span>
              <span style="display: block">
                  Format: .JPEG, .PNG
              </span>
          </v-row>
        </div>
      </v-col>
    </v-row>
    <div class="account__file--save">
      <button>
        Save
      </button>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      username: "namrorel",
      email: "namroreal@gmail.com",
      name: null,
      phoneNumber: null,
      shopeName: null,
      address: null,
      sex: null,
      sexOptions: ["Male", "Female", "Orther"],
      birthday: null,
      file: null
    };
  }
};
</script>

<style lang="scss">
@import "@/assets/scss/components/profile/account/file.scss";
</style>
