@extends('product.layout.main')

@section('title', 'Page')

@section('content')
    <div class="w-full h-full px-32 py-4 bg-gray-100">
        <div class="pt-7 flex flex-col gap-8">
            <div class="h-96 flex flex-col rounded-3xl bg-center bg-[url('../../../public/assets/image/product-page-bg.jpg')] justify-center items-center gap-3 text-white">
                    <h1 class="text-6xl font-sans px-4">Explore The Beauty of Indonesia</h1>
            </div>
            <div class="flex justify-between w-full gap-4">
                {{-- Destination Filter --}}
                <div class="relative inline-block text-left">
                    <button type="button" class="inline-flex justify-between w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="title-button" aria-haspopup="true" aria-expanded="true">
                        Destination
                        <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5" id="title-dd">
                        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                            <form action="/product" method="get">
                                <button type="submit" name="title" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">All Destinations</button>
                                @foreach ($travels as $travel)
                                    <button type="submit" name="title" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem" value="{{ $travel->title }}">{{ $travel->title }}</button>
                                @endforeach
                            </form>
                        </div>
                    </div>
                </div>
                {{-- Departure Filter --}}
                <div class="relative inline-block text-left">
                    <button type="button" class="inline-flex justify-between w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="departure-button" aria-haspopup="true" aria-expanded="true">
                        Departure
                        <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5" id="departure-dd">
                        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                            <form action="/product" method="get">
                                <button type="submit" name="departure_time" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">All Departures</button>
                                @foreach ($departures as $departure)
                                    <button type="submit" name="title" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem" value="{{ $departure->title }}">{{ date('j F Y', strtotime($departure->departure_time)) }}</button>
                                @endforeach
                            </form>
                        </div>
                    </div>
                </div>
                {{-- Price Filter --}}
                <div class="relative inline-block text-left">
                    <button type="button" class="inline-flex justify-between w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="price-button" aria-haspopup="true" aria-expanded="true">
                        Price
                        <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5" id="price-dd">
                        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                            <form action="/product" method="get">
                                <button type="submit" name="price" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">All Prices</button>
                                @foreach ($prices as $price)
                                    <button type="submit" name="title" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem" value="{{ $price->title }}">Rp. {{ number_format($price->price, 0, ',', '.') }}</button>
                                @endforeach
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-10 my-4" id="travelList">
            @if ($departureRequest != null)
                @foreach ($travels as $travel)
                    <div class="p-6 rounded-lg shadow-lg">
                        <h2 class="text-4xl font-sans font-bold">{{ $travel->title }}</h2>
                        <img src="{{ asset('assets/image/product-detail-'.$travel->id.'-1.jpg') }}" alt="product" class=" w-full my-4">
                        <div class="flex justify-between items-center">
                            <h5 class="text-base font-sans font-normal text-black">Rp. {{ number_format($travel->price, 0, ',', '.') }}/pax</h5>
                            <a href="/product/{{ $travel->id }}">
                                <button type="button"
                                    class="flex py-3 pl-6 pr-4 justify-center items-center gap-2 bg-blue-600 rounded-lg">
                                    <h3 class="text-base font-sans font-semibold text-white">Book Now!</h3>
                                    <img src="assets/logo/ArrowRight.svg" alt="">
                                </button>
                            </a>
                        </div>
                    </div>
                @endforeach
            @else
            @foreach ($travels as $travel)
                <div class="p-6 rounded-lg shadow-lg">
                    <h2 class="text-4xl font-sans font-bold">{{ $travel->title }}</h2>
                    <img src="{{ asset('assets/image/product-detail-'.$travel->id.'-1.jpg') }}" alt="product" class="w-full h-auto object-cover my-4" style="height: 284px;">
                    <div class="flex justify-between items-center">
                        <h5 class="text-base font-sans font-normal text-black">Rp. {{ number_format($travel->price, 0, ',', '.') }}/pax</h5>
                        <a href="/product/{{ $travel->id }}">
                            <button type="button"
                                class="flex py-3 pl-6 pr-4 justify-center items-center gap-2 bg-blue-600 rounded-lg">
                                <h3 class="text-base font-sans font-semibold text-white">Book Now!</h3>
                                <img src="assets/ArrowRight.svg" alt="">
                            </button>
                        </a>
                    </div>
                </div>
            @endforeach
            @endif
        </div>
    </div>
@endsection
