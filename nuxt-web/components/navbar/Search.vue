<template>
  <div id="search">
    <v-row class="flex justify-center">
        <v-col cols="11" class="h-8">
            <div class="input-search inline-block w-full">
                <v-text-field v-model="searchFilter" placeholder="Search..."/>
            </div>
        </v-col>
        <v-col cols="1" class="mt-4">
            <v-btn class="rounded-lg">
                <v-icon left>
                    mdi-magnify
                </v-icon>
            </v-btn>
        </v-col>
    </v-row>
    <div class="list-search">
      <span v-for="product in listProducts" :key="product.label + product.id" @click="selectedProduct(product.id)" class="cursor-pointer hover:opacity-70">{{product.label}}</span>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      searchFilter: null,
      listProducts:[
          {id: 0, label: 'Smart Phone'},
          {id: 1, label: 'TV'},
          {id: 2, label: 'Laptop'},
          {id: 3, label: 'Headphone'},
          {id: 4, label: 'Keyboard'},
          {id: 5, label: 'Sneaker'},
          {id: 6, label: 'Houseware'},
          {id: 7, label: 'Clothes'}
      ]
    }
  },
  methods:{
    selectedProduct(product_id){
      alert(product_id);
    }
  }
}
</script>

<style lang="scss">
@import "@/assets/scss/components/navbar/search.scss";
</style>
