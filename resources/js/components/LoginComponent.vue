<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Login Component</div>

          <div class="card-body">
            <form id="login" method="POST" action="/login" novalidate>
              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label">Email address</label>
                <div class="col-md-6">
                  <ValidationProvider name="email" rules="required|email" v-slot="{ errors }">
                    <input
                      id="email"
                      type="email"
                      class="form-control @error('email') is-invalid @enderror"
                      name="email"
                      autocomplete="email"
                      v-model="email"
                    />
                    <span>{{ errors[0] }}</span>
                  </ValidationProvider>
                </div>
              </div>
              <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label">Password</label>
                <div class="col-md-6">
                  <ValidationProvider
                    name="password"
                    rules="required|strongPassword"
                    v-slot="{ errors }"
                  >
                    <input
                      id="password"
                      type="password"
                      class="form-control @error('password') is-invalid @enderror"
                      name="password"
                      autocomplete="current-password"
                    />
                    <span>{{ errors[0] }}</span>
                  </ValidationProvider>
                </div>
              </div>
              <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-primary">SIGN IN</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
  data() {
    return {
      email: "",
      password: ""
    };
  }
};
</script>
