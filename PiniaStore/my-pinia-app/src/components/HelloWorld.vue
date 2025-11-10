<template>
  <div class="user-panel">
    <h2>
      <span v-if="userStore.isAdmin">Администратор</span>
      {{ userStore.welcomeMessage }}
    </h2>

    <p>Статус: {{ userStore.isLoggedIn ? 'Вошли' : 'Не вошли' }}</p>
    <p>Роль: {{ userStore.role }}</p>
    <p v-if="userStore.isAdmin" class="admin">Вы администратор!</p>

    <p>Товаров в корзине: {{ userStore.cartCount }}</p>

    <div class="buttons">
      <button @click="userStore.login('', 'admin')">Войти как админ</button>
      <button @click="userStore.login('', 'user')">Войти как пользователь</button>

      <button 
        @click="userStore.addToCart()" 
        :disabled="!userStore.isLoggedIn"
        class="add-to-cart"
      >
        Добавить в корзину ({{ userStore.cartCount }})
      </button>

      <button 
        @click="userStore.removeFromCart()" 
        :disabled="!userStore.isLoggedIn || userStore.cartCount === 0"
        class="remove-from-cart"
      >
        Удалить из корзины
      </button>

      <button @click="userStore.logout()">Выйти</button>
    </div>
  </div>
</template>

<script setup>
import { useUserStore } from '@/stores/userStore'
const userStore = useUserStore()
</script>

<style scoped>
.user-panel {
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 10px;
  max-width: 400px;
  margin: 20px auto;
  font-family: Arial, sans-serif;
  text-align: center;
}

h2 {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  font-size: 1.5rem;
  margin-bottom: 16px;
}

h2 span {
  background: #e74c3c;
  color: white;
  padding: 4px 10px;
  border-radius: 6px;
  font-size: 0.8rem;
  font-weight: bold;
}

button {
  margin: 5px;
  padding: 8px 12px;
  background: #42b983;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: 0.2s;
  font-weight: bold;
}

button:hover:not(:disabled) {
  transform: translateY(-1px);
}

.add-to-cart {
  background: #42b983;
  min-width: 180px;
}

.add-to-cart:hover:not(:disabled) {
  background: #369b70;
}

.add-to-cart:disabled {
  background: #ccc !important;
  color: #666 !important;
  cursor: not-allowed;
  opacity: 0.7;
}

.remove-from-cart {
  background: #e74c3c;
  min-width: 180px;
}

.remove-from-cart:hover:not(:disabled) {
  background: #c0392b;
}

.remove-from-cart:disabled {
  background: #ccc !important;
  color: #666 !important;
  cursor: not-allowed;
  opacity: 0.7;
}

.admin {
  color: #e74c3c;
  font-weight: bold;
  font-size: 1.1rem;
}
</style>