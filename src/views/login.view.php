<?php require VIEWS . "partials/header.view.php" ?>

<main>

<div class=" flex content-center justify-center w-full p-7">
  <form class="bg-rebeccapurple shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <div class="mb-4">
      <label class="block text-white text-sm font-bold mb-2" for="username">
        Username
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
    </div>
    <div class="mb-6">
      <label class="block text-white text-sm font-bold mb-2" for="password">
        Password
      </label>
      <input class="shadow appearance-none border border-rose-300 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************">
      <p class="text-rose-300 text-xs italic">Please choose a password.</p>
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-fuchsia-700 hover:bg-fuchsia-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
        Sign In
      </button>
      <a class="inline-block align-baseline font-bold text-sm text-fuchsia-700 hover:text-fuchsia-600" href="#">
        Forgot Password?
      </a>
    </div>
  </form>
</div>

</main>

<?php require VIEWS . "partials/footer.view.php" ?>
