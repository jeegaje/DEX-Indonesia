@extends('company-profile.template')

@section('content')
        <section>
            <div class="max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                <div class="flex gap-5">
                    @forEach ($newest_blogs as $index => $newest_blog)
                    @if ($index < 1)
                    <div class="w-full p-10 flex items-end rounded-lg md:h-auto h-96" style="background-image:
    linear-gradient(to bottom, rgba(170, 170, 170, 0.52), rgba(0, 0, 0, 0.73)),
    url('{{ asset('storage/' . $newest_blog->banner) }}'); background-repeat: no-repeat; background-size: cover; background-position: center;">
                        <div class="flex flex-col text-white">
                            <a href="{{ route('article.show', ['slug' => $newest_blog->slug]) }}">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight dark:text-white">{{ $newest_blog->title }}</h5>
                            </a>
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                                <span>{{ date('j F Y', strtotime($newest_blog->published_at)) }}</span>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    <div class="md:flex hidden flex-col gap-5">
                        @forEach ($newest_blogs as $index => $newest_blog)
                        @if ($index >= 1 || $index < 4)
                        <div class="w-96 h-52 p-5 flex items-end rounded-lg" style="background-image:
    linear-gradient(to bottom, rgba(170, 170, 170, 0.52), rgba(0, 0, 0, 0.73)),
    url('{{ asset('storage/' . $newest_blog->banner) }}'); background-repeat: no-repeat; background-size: cover; background-position: center;">
                            <div class="flex flex-col text-white">
                                <a href="{{ route('article.show', ['slug' => $newest_blog->slug]) }}">
                                    <h5 class="mb-2 text-xl font-bold tracking-tight dark:text-white">{{ $newest_blog->title }}</h5>
                                </a>
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                    </svg>
                                    <span>{{ date('j F Y', strtotime($newest_blog->published_at)) }}</span>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach

                    </div>
                </div>
                <div class="flex justify-between border-b border-gray-200 dark:border-gray-700 my-10">
                    <h1 class="text-2xl font-bold mb-5">Artikel DEX</h1>
                    <button type="button" class="text-[#0756FF] border-1 border-[#0756FF]">Lihat Semua</button>
                </div>
                <div class="grid md:grid-cols-3 grid-cols-1 gap-5 items-start">
                    <div class="grid md:grid-cols-2 grid-cols-1 gap-5 col-span-2">
                        @forEach ($newest_blogs as $index => $newest_blog)
                        <div class="md:max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <div class="h-40 flex items-center p-2 " style="background-repeat: no-repeat; background-size: cover; background-position: center; background-image: url('{{ asset('storage/' . $newest_blog->banner) }}')">
                            </div>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $newest_blog->title }}</h5>
                                </a>
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                      </svg>
                                    <span>{{ date('j F Y', strtotime($newest_blog->published_at)) }}</span>
                                    </div>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                        {{ Str::limit($newest_blog->meta_description, 30, '...') }}
                                        <a href="{{ url('/articles-and-events/' . $newest_blog->slug) }}" class="font-bold text-[#0756FF]">Baca Selengkapnya</a>
                                    </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="">
                        <div class="rounded-lg bg-blue-950 py-16 px-10 text-center">
                            <h3 class="text-white text-xl font-bold">DEX Activity</h3>
                            <p class="text-white mb-5">Lihat kegiatan yang kami lakukan melalui kanal media kami lainnya</p>
                            <div class="flex justify-center items-center gap-5">
                                <a href="https://www.instagram.com/dexpumpid/" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 256 256"><g fill="none"><rect width="256" height="256" fill="url(#skillIconsInstagram0)" rx="60"/><rect width="256" height="256" fill="url(#skillIconsInstagram1)" rx="60"/><path fill="#fff" d="M128.009 28c-27.158 0-30.567.119-41.233.604c-10.646.488-17.913 2.173-24.271 4.646c-6.578 2.554-12.157 5.971-17.715 11.531c-5.563 5.559-8.98 11.138-11.542 17.713c-2.48 6.36-4.167 13.63-4.646 24.271c-.477 10.667-.602 14.077-.602 41.236s.12 30.557.604 41.223c.49 10.646 2.175 17.913 4.646 24.271c2.556 6.578 5.973 12.157 11.533 17.715c5.557 5.563 11.136 8.988 17.709 11.542c6.363 2.473 13.631 4.158 24.275 4.646c10.667.485 14.073.604 41.23.604c27.161 0 30.559-.119 41.225-.604c10.646-.488 17.921-2.173 24.284-4.646c6.575-2.554 12.146-5.979 17.702-11.542c5.563-5.558 8.979-11.137 11.542-17.712c2.458-6.361 4.146-13.63 4.646-24.272c.479-10.666.604-14.066.604-41.225s-.125-30.567-.604-41.234c-.5-10.646-2.188-17.912-4.646-24.27c-2.563-6.578-5.979-12.157-11.542-17.716c-5.562-5.562-11.125-8.979-17.708-11.53c-6.375-2.474-13.646-4.16-24.292-4.647c-10.667-.485-14.063-.604-41.23-.604zm-8.971 18.021c2.663-.004 5.634 0 8.971 0c26.701 0 29.865.096 40.409.575c9.75.446 15.042 2.075 18.567 3.444c4.667 1.812 7.994 3.979 11.492 7.48c3.5 3.5 5.666 6.833 7.483 11.5c1.369 3.52 3 8.812 3.444 18.562c.479 10.542.583 13.708.583 40.396s-.104 29.855-.583 40.396c-.446 9.75-2.075 15.042-3.444 18.563c-1.812 4.667-3.983 7.99-7.483 11.488c-3.5 3.5-6.823 5.666-11.492 7.479c-3.521 1.375-8.817 3-18.567 3.446c-10.542.479-13.708.583-40.409.583c-26.702 0-29.867-.104-40.408-.583c-9.75-.45-15.042-2.079-18.57-3.448c-4.666-1.813-8-3.979-11.5-7.479s-5.666-6.825-7.483-11.494c-1.369-3.521-3-8.813-3.444-18.563c-.479-10.542-.575-13.708-.575-40.413s.096-29.854.575-40.396c.446-9.75 2.075-15.042 3.444-18.567c1.813-4.667 3.983-8 7.484-11.5s6.833-5.667 11.5-7.483c3.525-1.375 8.819-3 18.569-3.448c9.225-.417 12.8-.542 31.437-.563zm62.351 16.604c-6.625 0-12 5.37-12 11.996c0 6.625 5.375 12 12 12s12-5.375 12-12s-5.375-12-12-12zm-53.38 14.021c-28.36 0-51.354 22.994-51.354 51.355s22.994 51.344 51.354 51.344c28.361 0 51.347-22.983 51.347-51.344c0-28.36-22.988-51.355-51.349-51.355zm0 18.021c18.409 0 33.334 14.923 33.334 33.334c0 18.409-14.925 33.334-33.334 33.334s-33.333-14.925-33.333-33.334c0-18.411 14.923-33.334 33.333-33.334"/><defs><radialGradient id="skillIconsInstagram0" cx="0" cy="0" r="1" gradientTransform="matrix(0 -253.715 235.975 0 68 275.717)" gradientUnits="userSpaceOnUse"><stop stop-color="#fd5"/><stop offset=".1" stop-color="#fd5"/><stop offset=".5" stop-color="#ff543e"/><stop offset="1" stop-color="#c837ab"/></radialGradient><radialGradient id="skillIconsInstagram1" cx="0" cy="0" r="1" gradientTransform="matrix(22.25952 111.2061 -458.39518 91.75449 -42.881 18.441)" gradientUnits="userSpaceOnUse"><stop stop-color="#3771c8"/><stop offset=".128" stop-color="#3771c8"/><stop offset="1" stop-color="#60f" stop-opacity="0"/></radialGradient></defs></g></svg>                                </a>
                                <a href="https://www.youtube.com/@dexpumpindonesia6971" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10"  viewBox="0 0 256 180"><path fill="#f00" d="M250.346 28.075A32.18 32.18 0 0 0 227.69 5.418C207.824 0 127.87 0 127.87 0S47.912.164 28.046 5.582A32.18 32.18 0 0 0 5.39 28.24c-6.009 35.298-8.34 89.084.165 122.97a32.18 32.18 0 0 0 22.656 22.657c19.866 5.418 99.822 5.418 99.822 5.418s79.955 0 99.82-5.418a32.18 32.18 0 0 0 22.657-22.657c6.338-35.348 8.291-89.1-.164-123.134"/><path fill="#fff" d="m102.421 128.06l66.328-38.418l-66.328-38.418z"/></svg>
                                </a>
                            </div>
                        </div>
                        <div class="my-5">
                            <h1 class="text-2xl font-bold mb-5">Artikel Terbaru</h1>
                            @forEach ($newest_blogs as $index => $newest_blog)
                            @if($index < 3)
                            <div class="flex flex-col text-gray-900">
                                <div class="grid grid-cols-4 gap-5 border-b-2 border-gray-200 py-5 items-center">
                                    <div class="col-span-3">
                                        <a href="#">
                                            <h5 class="mb-2 text-md font-bold tracking-tight dark:text-gray-900">{{ $newest_blog->title }}</h5>
                                        </a>
                                        <div class="flex items-center gap-2">
                                            <svg class="w-4 h-4 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                            </svg>
                                            <span>{{ date('j F Y', strtotime($newest_blog->published_at)) }}</span>
                                        </div>
                                    </div>
                                    <div class="w-20 h-20 p-2 rounded-full" style="background-image: url('{{ asset('storage/' . $newest_blog->banner) }}'); background-repeat: no-repeat; background-size: cover; background-position: center;">
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        <div class="my-5">
                            <h1 class="text-2xl font-bold mb-5">Kategori Artikel</h1>
                            @forEach ($blog_categories as $category)
                            <div class="h-20 rounded-lg flex items-center p-2 my-4" style="background-repeat: no-repeat; background-size: cover; background-position: center; background-image:
    linear-gradient(to left, rgba(155, 155, 155, 0.52), rgba(0, 0, 0, 0.73)),
    url('{{ asset('images/company-profile/galery-1.png') }}');">
                                <div class="px-2 py-1 rounded-lg" style="background: rgba(255, 255, 255, 0.493);">
                                    <p class="font-bold text-white">{{ $category->name }}</p>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>

            </div>
        </section>
@endsection