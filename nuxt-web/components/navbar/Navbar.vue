<template>
  <div id="navbar">
        <v-container>
            <v-row class="flex items-center justify-around">
                <NavbarConnect class="mx-2 mt-2"/>
                <NavbarProfile class="mx-2 mt-2"/>
            </v-row>
            <v-row class="flex items-center">
                <v-col cols="3">
                    <NavbarLogo />
                </v-col>
                <v-col cols="6">
                    <NavbarSearch/>
                </v-col>
                <v-col cols="3" class="justify-start">
                    <NavbarCart/>
                </v-col>
            </v-row>
        </v-container>
  </div>
</template>

<script>
export default {

}
</script>

<style>
    #navbar{
        background-color: #FA5030;
        background-image: linear-gradient(180deg,#FA5030 , #F57156);
    }
</style>