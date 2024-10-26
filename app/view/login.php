

<!DOCTYPE html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <Head title={title} path={path} >
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <div style="text-align: center;"></divstyle>

  <p>Login</p>
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">Criar Sua Conta</p>

          <form action="#" method="post">
            <div class="input-group mb-3">
              <input type="email" class="form-control" placeholder="Email" />
              <div class="input-group-text">
                <span class="bi bi-envelope"></span>
              </div>
            </div>
            <div class="input-group mb-3">
              <input
                type="password"
                class="form-control"
                placeholder="Password"
              />
              <div class="input-group-text">
                <span class="bi bi-lock-fill"></span>
              </div>
            </div>
            <!--begin::Row-->
            <div class="row">
              <div class="col-8">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault"
                  />
                  <label class="form-check-label" for="flexCheckDefault">
                   Salvar
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary">Criar</button>
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!--end::Row-->
          </form>

    

          <p class="mb-1">
            <a href="forgot-password.html">Esqueci Minha Senha</a>
          </p>
          <p class="mb-0">
            <a href="register.html" class="text-center">
              Registe nova senha
            </a>
          </p>
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    <!-- /.login-box -->

    <a href="loja">Próxima Página</a>

    <Scripts path={path} />
    <!--end::Script-->
  </body><!--end::Body-->
</html>