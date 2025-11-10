import { defineStore } from 'pinia'

export const useUserStore = defineStore('user', {
  state: () => ({
    username: 'Гость',
    isLoggedIn: false,
    role: 'user',
    cartCount: 0
  }),

  getters: {
    welcomeMessage: (state) => {
      if (!state.isLoggedIn) return 'Добро пожаловать, гость!'
      return state.role === 'admin'
        ? 'Здравствуйте, администратор!'
        : 'Здравствуйте, пользователь!'
    },

    isAdmin: (state) => state.role === 'admin'
  },

  actions: {
    login(username, role = 'user') {
      this.username = username || (role === 'admin' ? 'Администратор' : 'Пользователь')
      this.isLoggedIn = true
      this.role = role
    },

    logout() {
      this.username = 'Гость'
      this.isLoggedIn = false
      this.role = 'user'
      this.cartCount = 0
    },

    addToCart() {
      if (!this.isLoggedIn) {
        alert('Сначала войдите в систему!')
        return
      }
      this.cartCount++
    },

    removeFromCart() {
      if (!this.isLoggedIn) {
        alert('Сначала войдите в систему!')
        return
      }
      if (this.cartCount > 0) {
        this.cartCount--
      }
    },

    setUsername(name) {
      this.username = name
    }
  }
})