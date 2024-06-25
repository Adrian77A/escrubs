<x-layout>
    <x-slot name="title">Blog Escrubs- Sitio Oficial</x-slot>
    <div>
        <section class="bg0 p-t-62 p-b-60">
            <br>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-9 p-b-80">
                        <div class="p-r-45 p-r-0-lg">
                            <!-- item blog -->
                            <div class="p-b-63">
                                <a href="#" class="hov-img0 how-pos5-parent">
                                    <img src="{{ asset('storage/') . '/' . $item_blog[0]['img'] }}" alt="escrubs"
                                        style="border-radius: 10%;">

                                    <div class="flex-col-c-m size-123 bg9 how-pos5"
                                        style="text-align: center; width:21%">
                                        <span class="ltext-107 cl2 txt-center">
                                            {{ \Carbon\Carbon::parse($item_blog[0]['created_at'])->format('d M, Y') }}
                                        </span>

                                    </div>
                                </a>

                                <div class="p-t-32">
                                    <h4 class="p-b-15">
                                        <a href="#" class="ltext-108 cl2 hov-cl1 trans-04">
                                            {{ $item_blog[0]['title'] }}
                                        </a>
                                    </h4>

                                    <p class="stext-117 cl6">
                                        {!! $item_blog[0]['description'] !!}
                                    </p>

                                    <div class="flex-w flex-sb-m p-t-18">
                                        <span class="flex-w flex-m stext-111 cl2 p-r-30 m-tb-10">
                                            <span>
                                                <span class="cl4">By</span> Admin Escrubus
                                                <span class="cl12 m-l-4 m-r-6">|</span>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
    </section>
    </div>
</x-layout>
