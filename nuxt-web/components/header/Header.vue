<template>
  <div id="layout-login" class="h-24 flex items-center mr-12">
    <v-col class="flex justify-end" cols="4">
      <img
        src="@/assets/logo1.png"
        alt="Logo light"
        class="w-72 h-32 cursor-pointer hover:opacity-90 pb-4"
        @click="$router.push('/')"
      />
    </v-col>
    <v-col class="flex items-center" cols="6">
      <span class="text-black text-xl font-semibold relative left-[-80px]">{{
        $route.name.toUpperCase().split('-').reverse()[0]
      }}</span>
    </v-col>
    <v-col cols="2" class="flex justify-start items-center">
      <span class="cursor-pointer text-[#EE4D2D] hover:opacity-70">
        Need help?</span
      >
    </v-col>
  </div>
</template>
