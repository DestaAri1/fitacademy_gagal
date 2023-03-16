@extends('landingPage.master')

@section('konten')
<div class="h-[48rem] md:h-[55rem] relative font-publicSans">
    <nav class="relative flex justify-between md:py-2 px-10 lg:px-32 lg:py-3">
        <a href="/"><img class="h-20 md:h-16 lg:h-24 2xl:h-28" src="{{ asset('image/Fit Academy 2022 Logo PNG.png') }}" alt=""></a>
        <a href="" class="place-self-center hidden">
            <button class="py-1 w-20 lg:w-32 h-11 lg:h-16 ml-4 text-base lg:text-2xl font-bold text-[#F58726] hover:text-white border-[3px] border-[#F58726] rounded-full hover:bg-[#F58726] transition duration-500">
                Blog
            </button>
        </a>
    </nav>

    <div class="flex flex-col lg:flex-row lg:mx-36 lg:mt-24">
        <div class="text-center lg:w-4/5 lg:mr-7">
            <div class="mt-20 md:mt-12 lg:mt-0">
                <h1 class="text-[#2F97D4] text-2xl lg:text-start font-bold leading-normal tracking-widest md:text-2xl lg:text-3xl 2xl:text-5xl">Dapatkan Berbagai Modul Penunjang Kariermu</h1>
            </div>
            <div class="mt-16 lg:mt-16">
                <h2 class="text-base font-normal md:text-lg lg:text-start lg:text-xl 2xl:text-3xl">Pilih Siapa Dirimu? <br>
                    Temukan Konten Pembelajaran yang Sesuai
                </h2>
            </div>
        </div>

        <div class="mx-6 lg:mx-0 mt-14 lg:mt-0 gap-3 lg:gap-10 flex flex-row justify-center items-center lg:justify-evenly">
            <div class="group max-w-sm rounded-lg flex flex-row justify-center relative">
                <div class="group-hover:border-x-2 group-hover:border-b-4 group-hover:border-x-[#F58726]/70 group-hover:border-b-[#F58726]/100 group-hover:rounded-[2.7rem] transition delay-150 duration-300">
                    <img class="rounded-t-lg lg:hidden" src="{{ asset('image/cewek1-landingpage-mob.png') }}" alt="" />
                    <img class="rounded-t-lg hidden lg:block" src="{{ asset('image/Group-12.png') }}" alt="" />
                </div>
                <div class="md:mt-6 z-10 absolute -bottom-2 lg:bottom-16 lg:-left-4">
                    <a href="{{ route('perusahaan') }}" class="px-6 py-3 text-sm font-medium text-center text-white bg-[#F58726] rounded-full group-hover:px-10 transition-[padding]  delay-150 duration-300">Pilih</a>
                </div>
            </div>

            <div class="group max-w-sm rounded-lg flex flex-row justify-center relative">
                <div class="group-hover:border-x-2 group-hover:border-b-4 group-hover:border-x-[#F58726]/70 group-hover:border-b-[#F58726]/100 group-hover:rounded-[2.7rem] transition delay-150 duration-300">
                    <img class="rounded-t-lg lg:hidden" src="{{ asset('image/cewek2-landingpage-mob.png') }}" alt="" />
                    <img class="rounded-t-lg hidden lg:block" src="{{ asset('image/Group-10.png') }}" alt="" />
                </div>
                <div class="md:mt-6 z-10 absolute -bottom-2 lg:bottom-16 lg:-left-4">
                    <a href="{{ route('content_creator') }}" class="px-6 py-3 text-sm font-medium text-center text-white bg-[#F58726] rounded-full group-hover:px-10 transition-[padding] delay-150 duration-300">Pilih</a>
                </div>
            </div>

            <div class="group max-w-sm rounded-lg flex flex-row justify-center relative">
                <div class="group-hover:border-x-2 group-hover:border-b-4 group-hover:border-x-[#F58726]/70 group-hover:border-b-[#F58726]/100 group-hover:rounded-[2.7rem] transition delay-150 duration-300">
                    <img class="rounded-t-lg lg:hidden" src="{{ asset('image/cewek3-landingpage-mob.png') }}" alt="" />
                    <img class="rounded-t-lg hidden lg:block" src="{{ asset('image/Group-8.png') }}" alt="" />
                </div>
                <div class="md:mt-6 z-10 absolute -bottom-2 lg:bottom-16 lg:-left-4">
                    <a href="{{ route('netizen') }}" class="px-6 py-3 text-sm font-medium text-center text-white bg-[#F58726] rounded-full group-hover:px-10 transition-[padding] delay-150 duration-300">Pilih</a>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="bg-[#2F97D4] h-[32rem] md:h-[25rem] font-publicSans text-white lg:h-96">
    <div class="px-6">
        <h1 class="text-3xl font-bold text-center text-white pt-24 md:text-2xl md:pt-14">FitAcademy</h1>
        <h3 class="text-xl font-bold text-center">Platform pembelajaran berbasis microlearning</h3>
        <h2 class="px-6 mt-6 text-sm font-normal text-center text-white md:text-xl ">Ayo bergabung dan menjadi lebih dekat dengan FitAcademy! <br>Kunjungi sosial media kami untuk mendapatkan informasi terbaru</h2>

        <div class="flex flex-col items-center mt-8 md:flex-row md:justify-center">
            <a class="group" href="https://www.tiktok.com/@fitacademy.id?_t=8aPRooWJ6eI&_r=1">
                <div class="flex items-center">
                    <div class="bg-[url('/image/tiktok-icon.svg')] group-hover:bg-[url('image/tiktok-black.svg')] w-7 h-7 md:w-10 md:h-10"></div>
                    <h3 class="ml-8 md:ml-5 group-hover:text-[#3f3f3f]">fitacademy.id</h3>
                </div>
            </a>

            <a class="group" href="https://www.instagram.com/fitacademy_id/">
                <div class="flex items-center mt-5 ml-2 md:mt-0 lg:ml-8">
                    <div class="bg-[url('/image/instagram-icon.svg')] group-hover:bg-[url('image/instagram-black.svg')] w-7 h-7 md:w-10 md:h-10"></div>
                    <h3 class="ml-8 group-hover:text-[#3f3f3f] md:ml-5">fitacademy_id</h3>
                </div>
            </a>
        </div>

        <div class="text-xs font-normal text-center mt-9 lg:text-sm">
            <h6>Jl. Pangeran Wirosobo Gg. Wiropamungkas No.8, Sorosutan, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55162</h6>
        </div>
    </div>
</footer>
@endsection

