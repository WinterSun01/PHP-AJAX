<script setup>
import { useUserStore } from '@/stores/userStore'
import HelloWorld from '@/components/HelloWorld.vue'

const userStore = useUserStore()
</script>

<template>
  <div id="app">
    <h1>PiniaStore</h1>
    <HelloWorld />
  </div>
</template>