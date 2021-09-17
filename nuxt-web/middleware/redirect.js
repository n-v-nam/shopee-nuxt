export default function ({app, redirect}) {
    // redirect login
    if (app.router.history.current.path == '/buyer' || app.router.history.current.path == '/buyer/') {
      return redirect('/buyer/login')
    }
  }