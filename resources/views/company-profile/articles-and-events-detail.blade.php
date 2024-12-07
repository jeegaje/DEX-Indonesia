@extends('company-profile.template')

@section('meta')
<meta name="description" content="{{ $blog->meta_description }}">
<meta name="keywords" content="{{ $blog->meta_keywords }}">
@endsection

@section('content')
        <section>
            <div class="max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                <div class="grid md:grid-cols-3 grid-cols-1 gap-5 items-start">
                    <div class="gap-5 col-span-2">
                        <div class="h-80 rounded-lg flex items-center" style="background-repeat: no-repeat; background-size: cover; background-position: center; background-image:
                        url('{{ asset('storage/' . $blog->banner) }}');">
                        </div>
                        <div class="my-8">
                            <h1 class="text-2xl font-bold mb-2">{{ $blog->title }}</h1>
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                                <span class="text-gray-600 text-sm">{{ date('j F Y', strtotime($blog->published_at)) }}</span>
                            </div>
                        </div>
                        <div>
                            {!! $blog->content !!}
                        </div>
                    </div>
                    <div class="">
                        <div class="rounded-lg bg-blue-950 py-16 px-10 text-center">
                            <h3 class="text-white text-xl font-bold">DEX Activity</h3>
                            <p class="text-white mb-5">Lihat kegiatan yang kami lakukan melalui kanal media kami lainnya</p>
                            <div class="flex flex-col items-center gap-5">
                                <button class="px-5 py-2 w-32 rounded-md bg-white">Youtube</button>
                                <button class="px-5 py-2 w-32 rounded-md bg-[#0756FF] text-white">Instagram</button>
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