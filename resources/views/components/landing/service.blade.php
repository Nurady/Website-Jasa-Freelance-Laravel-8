<a href="{{ route('landing.detail', $item->id) }}" class="inline-block px-3">
    <div class="inline-block h-auto p-4 overflow-hidden bg-white w-96 md:p-5 rounded-2xl">
        <div class="flex items-center mb-6 space-x-2">
            <!--Author's profile photo-->
            @if ($item->user->detail_user->photo != NULL)
                <img class="object-cover mr-1 rounded-full w-14 h-14" src="{{ url(Storage::url($item->user->detail_user->photo)) }}" alt="photo freelancer" loading="lazy">
            @else
                <svg class="object-cover object-center mr-1 text-gray-300 rounded-full w-14 h-14" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
            @endif

            <div>
                <!--Author name-->
                <p class="text-lg font-semibold text-gray-900">{{ $item->user->name ?? '' }}</p>
                <p class="font-light text-serv-text text-md">
                    {{ $item->user->detail_user->role ?? '' }}
                </p>
            </div>
        </div>

        <!--Banner image-->
        @if (count($item->thumbnails_service))
            @if (($item->thumbnails_service[0]->thumbnail) != NULL)
                <img class="object-cover w-full h-48 rounded-2xl" src="{{ url(Storage::url($item->thumbnails_service[0]->thumbnail)) }}" alt="photo freelancer" loading="lazy">
            @else
                <img class="w-full rounded-2xl" src="{{ url('https://via.placeholder.com/750x500') }}" alt="placeholder" />
            @endif
        @else
            <img class="w-full rounded-2xl" src="{{ url('https://via.placeholder.com/750x500') }}" alt="placeholder" />
        @endif

        <!--Title-->
        <h1 class="py-4 mt-1 text-lg font-semibold leading-normal text-gray-900">
            {{ $item->title ?? '' }}
        </h1>
        <!--Description-->
        <div class="max-w-full">
            @include('components.landing.rating')
        </div>

        <div class="flex justify-between w-full mt-5 text-center">
            <span
                class="inline-flex items-center py-1 mr-3 leading-none text-serv-text text-md ">
                Price starts from:
            </span>
            <span
                class="inline-flex items-center font-semibold leading-none text-serv-button text-md">
                Rp {{ number_format($item->price) ?? '' }}
            </span>
        </div>
    </div>
</a>