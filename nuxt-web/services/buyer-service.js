import { API_ENDPOINT } from '~/constants/ApiEndpoint'

export default ($axios) => () => ({

    async register(data) {
        return await $axios.$post(API_ENDPOINT.ACCOUNT.REGISTER, data);
    },
    async login(data) {
        return await $axios.$post(API_ENDPOINT.ACCOUNT.LOGIN, data);
    }
})