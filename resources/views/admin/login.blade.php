<x-layout>
  <img src="/assets/images/company_logo.png" class="d-block mx-auto w-25">
  <form class="mx-auto w-25" method="POST" action="{{ route('login') }}">
    @csrf
    <div class="mb-3 form-floating">
      <input type="email" class="form-control" id="inputEmail" placeholder="name@example.com" name="email">
      <label for="inputEmail" class="form-label">Email address</label>
    </div>
    <div class="mb-3 form-floating">
      <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
      <label for="inputPassword" class="form-label">Password</label>
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
  </form>
</x-layout>