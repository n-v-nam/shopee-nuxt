<template>
  <div id="layout-login" class="mt-8">
    <v-row>
      <v-col class="flex justify-center">
        <v-list subheader>
          <v-subheader>CUSTOMER SERVICE</v-subheader>

          <v-list-item
            v-for="customerService in listCustomerService"
            :key="customerService"
          >
            <v-list-item-content
              class="hover:text-[#EE4D2D] cursor-pointer"
              @click="$router.push('/')"
            >
              <v-list-item-title v-text="customerService"></v-list-item-title>
            </v-list-item-content>
          </v-list-item>
        </v-list>
      </v-col>
      <v-col class="flex justify-center">
        <v-list subheader>
          <v-subheader>ABOUT SHOPEE</v-subheader>

          <v-list-item
            v-for="aboutShopee in listAboutShopee"
            :key="aboutShopee"
          >
            <v-list-item-content
              class="hover:text-[#EE4D2D] cursor-pointer"
              @click="$router.push('/')"
            >
              <v-list-item-title v-text="aboutShopee"></v-list-item-title>
            </v-list-item-content>
          </v-list-item>
        </v-list>
      </v-col>
      <v-col class="flex justify-center">
        <v-list subheader>
          <v-subheader>FOLLOW US</v-subheader>
          <v-list-item v-for="followUs in listFollowUs" :key="followUs.title">
            <v-icon>
              {{ followUs.icon }}
            </v-icon>
            <v-list-item-content
              class="hover:text-[#EE4D2D] cursor-pointer mx-2"
              @click="$router.push('/')"
            >
              <v-list-item-title v-text="followUs.title"></v-list-item-title>
            </v-list-item-content>
          </v-list-item>
        </v-list>
      </v-col>
      <v-col class="flex justify-center">
        <v-list subheader>
          <v-subheader>SHOPEE APP DOWNLOAD</v-subheader>
          <v-list-item
            v-for="appDownload in listShoppeAppDownload"
            :key="appDownload.title"
          >
            <v-icon>
              {{ appDownload.icon }}
            </v-icon>
            <v-list-item-content
              class="hover:text-[#EE4D2D] cursor-pointer mx-2"
              @click="$router.push('/')"
            >
              <v-list-item-title v-text="appDownload.title"></v-list-item-title>
            </v-list-item-content>
          </v-list-item>
        </v-list>
      </v-col>
    </v-row>
    <v-divider class="my-8"/>
    <v-row class="text-[12px]">
      <v-col cols="4" class="flex justify-center">
        <span>© 2021 Shopee. All Rights Reserved</span>
      </v-col>
      <v-col cols="8">
        <span>Country & Regio: </span>
        <span v-for="(country,index) in countries" :key="country" class="cursor-pointer"> {{index != countries.length - 1 ? country + ' | ': country}} </span>
      </v-col>
    </v-row>
  </div>
</template>

<script>
export default {
  data() {
    return {
      listCustomerService: [
        "Help Centre",
        "How To Buy",
        "How To Sell",
        "Payment Methods",
        "Shopee Coins",
        "Shopee Guarantee",
        "Return & Refund",
        " Shopee Mall Return & Refund",
        "Contact Us"
      ],
      listAboutShopee: [
        "About Us",
        "Shopee Careers",
        "Shopee Policies",
        "Privacy Policy",
        "Shopee Blog",
        "Shopee Mall",
        "Seller Centre",
        "Shopee Pros",
        "Flash Deals",
        "Media Contact",
        "Shopee Ambassador Programme"
      ],
      listFollowUs: [
        { title: "Facebock", icon: "mdi-facebook" },
        { title: "Google", icon: "mdi-google" },
        { title: "Youtube", icon: "mdi-youtube" }
      ],
      listShoppeAppDownload: [
        { title: "Appstore", icon: "mdi-apple" },
        { title: "CH Play", icon: "mdi-google-play" }
      ],
      countries: [
        "Singapore",
        "Indonesia",
        "Taiwan",
        "Thailand",
        "Malaysia",
        "Vietnam",
        "Philippines",
        "Brazil",
        "México",
        "Colombia",
        "Chile"
      ]
    };
  }
};
</script>

<style lang="scss" scoped>
span{
    color: black;
    opacity: 0.6;
}
.v-subheader {
  font-size: 12px;
  font-weight: bold;
}
.v-list-item {
  min-height: 0px !important;
  .v-list-item__content {
    padding-block: 6px;
    flex: unset !important;
    .v-list-item__title {
      font-size: 10px;
    }
  }
}
</style>