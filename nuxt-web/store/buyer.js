
export const state = () => ({
    buyerCurrent: null
  })
  
  export const getters = {
      getName: state => state.buyerCurrent ? state.buyerCurrent.email : null
  }
  
  export const mutations = {
    setBuyer(state, payload) {
      state.buyerCurrent = payload
    }
  }
  
  export const actions = {
    async register({ commit}, data) {
      const response = await this.$buyerService.register(data)
      if (response) {
        commit('setBuyer', data)
        this.$router.push('/')
      }
    },
    async login({ commit}, data) {
      const response = await this.$buyerService.login(data)
      if (response) {
        commit('setBuyer', data)
        this.$router.push('/')
      }
    }
  }
  