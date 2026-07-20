<form action="login.php" method="POST">
      <div class="flex w-[100%] m-auto p-4 text-xl">
        <h1 class="w-[95%] font-serif text-2xl">Login with PGLife</h1>
        <a href="index.php">
          <p>
            <i class="fa-solid fa-x w-[5%] text-gray-500 cursor-pointer"></i>
          </p>
        </a>
      </div>

      <div class="flex flex-col m-auto w-[100%] gap-2 h-44">
        <div class="flex border-2 border-gray-400 rounded-md h-[33%]">
          <i
            class="fa-solid fa-envelope w-[8%] bg-gray-400 flex justify-center items-center text-gray-700 border-gray-400 rounded-tl rounded-bl"
          ></i>
          <input
            type="email"
            placeholder="Email"
            name="email"
            class="w-[91%] pl-2"
          />
        </div>
        
        <div class="flex border-2 border-gray-400 rounded-md h-[33%]">
          <i
            class="fa-solid fa-lock w-[8%] bg-gray-400 flex justify-center items-center text-gray-700 border-r-2 border-gray-400 rounded-tl rounded-bl"
          ></i>
          <input
            type="password"
            placeholder="Password"
            name="password"
            class="w-[91%] pl-2"
          />
        </div>
        <div class="login-btn h-[33%]">
          <button
            type="submit"
            class="text-center w-full p-1 bg-violet-400 rounded-md"
          >
            Login
          </button>
        </div>
      </div>
      <div class="w-[60%] mx-auto my-4 flex justify-center">
        <p>
          <a class="text-blue-700" href="signup.php">Click here </a> to register
          a new Account
        </p>
      </div>
    </form>