import buyerService from '~/services/buyer-service'

export default (ctx, inject) => {
  const _buyerService = buyerService(ctx.$axios)

  // Injection
  inject('buyerService', _buyerService())
}