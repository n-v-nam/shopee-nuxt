export default function ({app, redirect}) {
    // redirect login
    if (app.router.history.current.path == '/buyer' || app.router.history.current.path == '/buyer/') {
      return redirect('/buyer/login')
    }
    // redirect to profile/account
    if (app.router.history.current.path == '/buyer/profile' || app.router.history.current.path == '/buyer/profile/') {
      return redirect('/buyer/profile/account')
    }
  }