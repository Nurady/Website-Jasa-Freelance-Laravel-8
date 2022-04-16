<div class="fixed inset-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto outline-none modal focus:outline-none" id="registerModal" >
    <div class="relative max-w-md mx-auto my-6 w-128">

    <!--content-->
    <div class="relative flex flex-col w-full bg-white border-0 shadow-lg outline-none rounded-xl focus:outline-none">

        <!--header-->
        <div class="p-5 mx-10 mt-5 text-center rounded-t-xl">
            <h3 class="text-2xl font-semibold">
                Sign up to Jasa Web
            </h3>
            <p class="mt-1 text-sm text-gray-400">
                Join Serv and start your real project
            </p>
        </div>

        <form action="{{ route('register') }}" method="POST">

            @csrf
            <!--body-->
            <div class="relative flex-auto p-6 mx-10">

                <div class="mb-4">
                    <label class="block mb-2 text-sm text-grey-darker" for="name">Full Name</label>
                    <input 
                        class="w-full px-4 py-3 text-xs border border-gray-300 rounded-lg appearance-none placeholder-serv-text" id="name" 
                        name="name"
                        type="text" 
                        placeholder="Your name"
                        required
                        autofocus
                    >
                    @if ($errors->has('name'))
                            <div class="mb-3 text-sm text-red-500">{{ $errors->first('name') }}</div>
                        @endif
                </div>

                <div class="mb-4">
                    <label class="block mb-2 text-sm text-grey-darker" for="email">
                        Email
                    </label>
                    <input 
                        class="w-full px-4 py-3 text-xs border border-gray-300 rounded-lg appearance-none placeholder-serv-text" id="email" 
                        name="email"
                        type="email" 
                        placeholder="name@domain.com"
                        required
                        autofocus
                    >
                    @if ($errors->has('email'))
                        <div class="mb-3 text-sm text-red-500">{{ $errors->first('email') }}</div>
                    @endif
                </div>
                
                <div>
                    <label class="block mb-2 text-sm text-grey-darker" for="password">Password</label>
                    <input 
                        class="w-full px-4 py-3 mb-3 text-xs border border-gray-300 rounded-lg appearance-none placeholder-serv-text" id="password" 
                        name="password"
                        type="password" 
                        placeholder="At least 8 characters"
                        required
                        autofocus
                    >
                    @if ($errors->has('password'))
                        <div class="mb-3 text-sm text-red-500">{{ $errors->first('password') }}</div>
                    @endif
                </div>

                  
                <div>
                    <label class="block mb-2 text-sm text-grey-darker" for="password_confirmation">Confirm Password</label>
                    <input 
                        class="w-full px-4 py-3 mb-3 text-xs border border-gray-300 rounded-lg appearance-none placeholder-serv-text" id="password_confirmation" 
                        name="password_confirmation"
                        type="password" 
                        placeholder="At least 8 characters"
                        required
                        autofocus
                    >
                    @if ($errors->has('password_confirmation'))
                        <div class="mb-3 text-sm text-red-500">{{ $errors->first('password_confirmation') }}</div>
                    @endif
                </div>

                <div class="flex items-center justify-between">
                    <div class="inline-block text-xs text-gray-400">
                        <label class="inline-flex items-center mt-3">
                            <input type="checkbox" class="w-5 h-5 rounded form-checkbox text-serv-button border-serv-text"><span class="ml-2 text-gray-400">I agree to the <a href="#" class="text-serv-button">Terms & Conditions</a></span>
                        </label>
                    </div>
                </div>
            </div>

            <!--footer-->
            <div class="px-6 pb-6 mx-10 rounded-b-xl">
                <input type="hidden" name="auth" value="true">
                <button type="submit" class="block w-full px-12 py-3 my-2 text-lg text-center text-white rounded-lg bg-serv-button">
                    Sign up
                </button>

                <p href="#" class="py-5 text-center">
                    Already have account? <a href="#" class="text-serv-button" onclick="toggleModal('loginModal');toggleModal('registerModal') ">Sign in</a>
                </p>
            </div>

        </form>
    </div>
    </div>
</div>
<div class="fixed inset-0 z-40 hidden bg-black opacity-75" id="registerModal-backdrop"></div>