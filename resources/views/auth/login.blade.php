
@include('frontend.commons.header', ['pageTitle' => 'Dpp | Login'])

<body class="min-h-screen bg-gray-50 dark:bg-gray-900">
    <section class="flex flex-col items-center justify-center min-h-screen px-6 py-8 mx-auto">
        <a href="#" class="flex items-center mb-6 text-2xl text-gray-900 font-extrabold  dark:text-white">
            <img class="w-8 h-8 mr-2" src="{{ asset('/favicon.png') }}"
                alt="logo">
            Dpp <span class="text-blue-600 ms-2"> Admin</span>
        </a>
        <div
            class="w-full bg-white rounded-lg shadow-sm dark:border sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Sign in to your account
                </h1>
                @include('frontend.commons.alerts')
                <form class="space-y-4 md:space-y-6" action="{{ route('login') }}" method="POST">
                    @csrf
                    <!-- Email Field -->
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Email
                        </label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}"
                            class="bg-gray-50 border-0 text-gray-900 rounded-lg focus:ring-blue-300
                            focus:border-green-400 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600
                            dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                            @error('email') border-red-500 @enderror"
                            placeholder="example@gmail.com" autofocus>
                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password Field -->
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Password
                        </label>
                        <input type="password" name="password" id="password"
                            class="bg-gray-50  border-0 text-gray-900 rounded-lg focus:ring-blue-300
                            focus:border-green-400 block w-full p-2.5 dark:bg-gray-700
                            dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                            @error('password') border-red-500 @enderror"
                            placeholder="••••••••">
                        @error('password')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Remember Me and Forgot Password -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" name="remember" type="checkbox"
                                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300
                                    dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
                            </div>
                        </div>
                        <a href="{{ route('password.request') }}"
                            class="text-sm font-medium text-gray-500 hover:underline dark:text-primary-500">
                            Forgot password?
                        </a>
                    </div>

                    <!-- Sign In Button -->
                    <button type="submit"
                        class="w-full bg-blue-600 font-bold text-white  hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300
                        rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700
                        dark:focus:ring-primary-800">
                        Log in
                    </button>

                    <!-- Go back Link -->
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">


                        <a href="{{ url('/') }}"
                            class="ml-auto font-medium text-primary-600 hover:underline dark:text-primary-500">
                            <i class="fas fa-arrow-left me-2"></i> Go back
                        </a>
                    </p>
                </form>
            </div>
        </div>
    </section>
</body>

</html>
