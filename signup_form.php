<form action="signup.php" method="POST">
      <div class="p-4 text-xl">
        <h1 class="w-[95%] font-serif text-2xl">Signup with PGLife</h1>
        <a href="index.php"
          ><p>
            <i class="fa-solid fa-x w-[5%] text-gray-500 cursor-pointer"></i></p
        ></a>
      </div>
      <div class="flex flex-col gap-2">
        <div class="flex border-2 border-gray-400 rounded-md h-[20%]">
          <i
            class="fa-solid fa-user w-[8%] bg-gray-400 flex justify-center items-center text-gray-700 border-gray-400 rounded-tl rounded-bl"
          ></i>
          <input
            type="text"
            placeholder="Full Name"
            name="name"
            class="w-[91%] pl-2"
          />
        </div>
        <div class="flex border-2 border-gray-400 rounded-md h-[20%]">
          <i
            class="fa-solid fa-phone w-[8%] bg-gray-400 flex justify-center items-center text-gray-700 border-r-2 border-gray-400 rounded-tl rounded-bl"
          ></i>
          <input
            type="tel"
            placeholder="Phone Number"
            name="phone"
            class="w-[91%] pl-2"
          />
        </div>
        <div class="flex border-2 border-gray-400 rounded-md h-[20%]">
          <i
            class="fa-solid fa-envelope w-[8%] bg-gray-400 flex justify-center items-center text-gray-700 border-r-2 border-gray-400 rounded-tl rounded-bl"
          ></i>
          <input
            type="email"
            placeholder="Email"
            name="email"
            class="w-[91%] pl-2"
          />
        </div>
        <div class="flex border-2 border-gray-400 rounded-md h-[20%]">
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
        <div class="flex border-2 border-gray-400 rounded-md h-[20%]">
          <i
            class="fa-solid fa-building-columns w-[8%] bg-gray-400 flex justify-center items-center text-gray-700 border-r-2 border-gray-400 rounded-tl rounded-bl"
          ></i>
          <input
            type="text"
            placeholder="College Name"
            name="college"
            class="w-[91%] pl-2"
          />
        </div>

        <div class="flex gap-4">
          <p>I'm a</p>
          <label>
            <input type="radio" name="gender" value="Male" />
            Male
          </label>

          <label>
            <input type="radio" name="gender" value="Female" />
            Female
          </label>
        </div>
        <div class="create-account-btn">
          <button
            type="submit"
            class="text-center w-full p-1 bg-violet-400 rounded-md"
          >
            Create Account
          </button>
        </div>
      </div>
      <div class="w-[40%] mx-auto my-4 flex justify-center">
        <p>Already have an Account?</p>
        <a href="login.php" class="text-blue-700">Login</a>
      </div>
    </form>